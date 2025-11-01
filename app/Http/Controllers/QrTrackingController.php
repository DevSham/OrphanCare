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
// Simple device detection
        $deviceType = $this->detectDeviceType($userAgent);
        $browser = $this->detectBrowser($userAgent);
        $platform = $this->detectPlatform($userAgent);

        $validator = validator(['campaign' => $campaign], [
            'campaign' => 'required|in:street-kids-christmas-ride,street-kids-christmas'
        ]);

        if ($validator->fails()) {
            Log::warning('Invalid campaign accessed', [
                'campaign' => $campaign,
                'ip' => $request->ip()
            ]);

            return redirect()->away('https://helpkidsup.org/error/invalid-campaign');
        }

// Record the scan
        QrScan::create([
            'campaign' => $campaign,
            'ip_address' => $request->ip(),
            'user_agent' => $userAgent,
            'referer' => $request->header('referer'),
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
// Define valid campaigns and their destination URLs
        $validCampaigns = [
            'street-kids-christmas-ride' => 'https://helpkidsup.org',
            'street-kids-christmas' => 'https://helpkidsup.org/support',
        ];

// Check if the campaign is valid
        if (!array_key_exists($campaign, $validCampaigns)) {
            throw new \InvalidArgumentException(
                "Invalid campaign: '{$campaign}'. " .
                "Valid campaigns are: " . implode(', ', array_keys($validCampaigns))
            );
        }

        return $validCampaigns[$campaign] ?? redirect()->away('https://helpkidsup.org/error/invalid-campaign');
    }
}
