<?php

use App\Services\ButtonTrackingService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrTrackingController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.skc-landing');
})->name('skc.landing');

Route::get('/support', function () {
    return view('pages.self-landing-page');
})->name('skc.support');

Route::get('/{campaign}', [QrTrackingController::class, 'track'])
    ->name('qr.track')
    ->middleware('throttle:' . config('campaigns.rate_limits.qr_scan.max_attempts', 50) . ',' . config('campaigns.rate_limits.qr_scan.decay_minutes', 1));

Route::post('/track-button-click', function (Request $request) {
    $validCampaigns = array_keys(config('campaigns.valid_campaigns', []));
    $allowedDomains = config('campaigns.allowed_domains', ['helpkidsup.org']);

    // Build domain regex pattern
    $domainPattern = '/^https?:\/\/(' . implode('|', array_map(function($domain) {
            return preg_quote($domain, '/');
        }, $allowedDomains)) . ')(\/.*)?$/i';

    $validated = $request->validate([
        'campaign' => [
            'required',
            'string',
            'in:' . implode(',', $validCampaigns),
            'max:' . config('campaigns.input_limits.campaign', 100),
        ],
        'button_id' => [
            'required',
            'string',
            'max:' . config('campaigns.input_limits.button_id', 100),
        ],
        'button_text' => [
            'required',
            'string',
            'max:' . config('campaigns.input_limits.button_text', 255),
        ],
        'page_url' => [
            'required',
            'string',
            'url',
            'max:' . config('campaigns.input_limits.page_url', 500),
            'regex:' . $domainPattern,
        ],
    ], [
        'page_url.regex' => 'The page URL must be from an allowed domain.',
    ]);

    ButtonTrackingService::trackClick(
        campaign: $validated['campaign'],
        buttonId: $validated['button_id'],
        buttonText: $validated['button_text'],
        pageUrl: $validated['page_url'],
        request: $request
    );

    return response()->json(['success' => true]);
})->middleware('throttle:' . config('campaigns.rate_limits.button_click.max_attempts', 100) . ',' . config('campaigns.rate_limits.button_click.decay_minutes', 1));
