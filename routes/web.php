<?php

use App\Services\ButtonTrackingService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrTrackingController;

Route::get('/', function () {
    return view('pages.skc-landing');
})->name('skc.landing');

Route::get('/support', function () {
    return view('pages.self-landing-page');
})->name('skc.support');

Route::get('/{campaign}', [QrTrackingController::class, 'track'])
    ->name('qr.track');

Route::post('/track-button-click', function (Request $request) {
    $validated = $request->validate([
        'campaign' => 'required|string',
        'button_id' => 'required|string',
        'button_text' => 'required|string',
        'page_url' => 'required|string',
    ]);

    ButtonTrackingService::trackClick(
        campaign: $validated['campaign'],
        buttonId: $validated['button_id'],
        buttonText: $validated['button_text'],
        pageUrl: $validated['page_url'],
        request: $request
    );

    return response()->json(['success' => true]);
});
