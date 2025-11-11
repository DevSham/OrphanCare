<?php

namespace App\Http\Controllers;

use App\Models\ButtonClick;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ButtonTrackingController extends Controller
{
    public function track(Request $request)
    {
        $validated = $request->validate([
            'campaign' => 'required|string|max:255',
            'button_id' => 'required|string|max:255',
            'button_text' => 'required|string|max:500',
            'page_url' => 'required|url|max:1000',
        ]);

        $agent = new Agent();
        $agent->setUserAgent($request->userAgent());

        $deviceType = 'desktop';
        if ($agent->isMobile()) {
            $deviceType = 'mobile';
        } elseif ($agent->isTablet()) {
            $deviceType = 'tablet';
        }

        ButtonClick::create([
            'campaign' => $validated['campaign'],
            'button_id' => $validated['button_id'],
            'button_text' => $validated['button_text'],
            'page_url' => $validated['page_url'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'device_type' => $deviceType,
            'browser' => $agent->browser(),
            'platform' => $agent->platform(),
            'clicked_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Button click tracked successfully'
        ]);
    }
}
