<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QrScan;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;

class QrTrackingController extends Controller
{
    public function track(Request $request, string $campaign)
    {
        // Parse user agent using Laravel's built-in methods
        $userAgent = $request->userAgent();

        // Limit user agent length to prevent storage issues
        $userAgent = substr($userAgent ?? '', 0, config('campaigns.input_limits.user_agent', 1000));

        // Simple device detection
        $deviceType = $this->detectDeviceType($userAgent);
        $browser = $this->detectBrowser($userAgent);
        $platform = $this->detectPlatform($userAgent);

        $validCampaigns = array_keys(config('campaigns.valid_campaigns', []));


        $validator = validator(['campaign' => $campaign], [
            'campaign' => 'required|in:'. implode(',', $validCampaigns)
        ]);

        if ($validator->fails()) {
            Log::warning('Invalid campaign accessed', [
                'campaign' => $campaign,
                'ip' => $request->ip()
            ]);

            abort(404, 'Invalid campaign');
        }

        // Limit referer length
        $referer = substr($request->header('referer') ?? '', 0, config('campaigns.input_limits.referer', 500));

        // Record the scan
        QrScan::create([
            'campaign' => $campaign,
            'ip_address' => $request->ip(),
            'user_agent' => $userAgent,
            'referer' => $referer,
            'device_type' => $deviceType,
            'browser' => $browser,
            'platform' => $platform,
            'scanned_at' => now(),
        ]);

        // Get the redirect URL based on campaign
        $redirectUrl = $this->getRedirectUrl($campaign);

        // Redirect to the actual destination
        return redirect()->away($redirectUrl);
    }

    private function detectDeviceType(string $userAgent): string
    {
        if (preg_match('/(mobile|android|iphone|ipod|blackberry)/i', $userAgent)) {
            return 'mobile';
        } elseif (preg_match('/(tablet|ipad)/i', $userAgent)) {
            return 'tablet';
        }
        return 'desktop';
    }

    private function detectBrowser(string $userAgent): string
    {
        $browsers = [
            'Chrome' => 'Chrome',
            'Firefox' => 'Firefox',
            'Safari' => 'Safari',
            'Edge' => 'Edge',
            'Opera' => 'Opera',
        ];

        foreach ($browsers as $browser => $value) {
            if (stripos($userAgent, $browser) !== false) {
                return $value;
            }
        }

        return 'Unknown';
    }

    private function detectPlatform(string $userAgent): string
    {
        $platforms = [
            'Windows' => 'Windows',
            'Macintosh' => 'Mac',
            'Mac OS' => 'Mac',
            'Linux' => 'Linux',
            'Android' => 'Android',
            'iPhone' => 'iOS',
            'iPad' => 'iOS',
        ];

        foreach ($platforms as $key => $platform) {
            if (stripos($userAgent, $key) !== false) {
                return $platform;
            }
        }

        return 'Unknown';
    }

    private function getRedirectUrl(string $campaign): string
    {
        // Get valid campaigns from centralized config
        $validCampaigns = config('campaigns.valid_campaigns', []);

        // Return only from whitelist, no fallback to redirect
        if (!array_key_exists($campaign, $validCampaigns)) {
            abort(404, 'Invalid campaign');
        }

        return $validCampaigns[$campaign];
    }
}
