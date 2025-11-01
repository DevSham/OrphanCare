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
        // Parse user agent
        $agent = new Agent();
        $agent->setUserAgent($request->userAgent());

        // Determine device type
        $deviceType = 'desktop';
        if ($agent->isMobile()) {
            $deviceType = 'mobile';
        } elseif ($agent->isTablet()) {
            $deviceType = 'tablet';
        }

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
            'user_agent' => $request->userAgent(),
            'referer' => $request->header('referer'),
            'device_type' => $deviceType,
            'browser' => $agent->browser(),
            'platform' => $agent->platform(),
            'scanned_at' => now(),
        ]);

        // Get the redirect URL based on campaign
        $redirectUrl = $this->getRedirectUrl($campaign);

        // Redirect to the actual destination
        return redirect()->away($redirectUrl);
    }

    private function getRedirectUrl(string $campaign): string
    {
        // Map campaigns to their destination URLs
        $urls = [
            'street-kids-christmas-ride' => 'https://helpkidsup.org',
            'street-kids-christmas' => 'https://helpkidsup.org/support',
        ];

        return $urls[$campaign];
    }
}
