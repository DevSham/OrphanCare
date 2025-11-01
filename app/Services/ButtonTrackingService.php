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
        TrackButtonClick::dispatch(
            campaign: $campaign,
            buttonId: $buttonId,
            buttonText: $buttonText,
            pageUrl: $pageUrl,
            ipAddress: $request->ip(),
            userAgent: $request->userAgent(),
            referer: $request->header('referer')
        );
    }
}
