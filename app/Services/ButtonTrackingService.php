<?php


namespace App\Services;

use App\Jobs\TrackButtonClick;
use Illuminate\Http\Request;

class ButtonTrackingService
{
    public static function trackClick(
        string  $campaign,
        string  $buttonId,
        string  $buttonText,
        string  $pageUrl,
        Request $request
    ): void
    {
        // Sanitize and limit input lengths to prevent storage issues
        $userAgent = substr($request->userAgent() ?? '', 0, config('campaigns.input_limits.user_agent', 1000));
        $referer = substr($request->header('referer') ?? '', 0, config('campaigns.input_limits.referer', 500));

        TrackButtonClick::dispatch(
            campaign: $campaign,
            buttonId: $buttonId,
            buttonText: $buttonText,
            pageUrl: $pageUrl,
            ipAddress: $request->ip(),
            userAgent: $userAgent,
            referer: $referer
        );
    }
}
