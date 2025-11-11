<?php

use App\Services\ButtonTrackingService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrTrackingController;
use Illuminate\Http\Request;
use App\Http\Controllers\ButtonTrackingController;


Route::get('/', function () {
    return view('pages.skc-landing');
})->name('skc.landing');

Route::get('/support', function () {
    return view('pages.self-landing-page');
})->name('skc.support');

Route::get('/{campaign}', [QrTrackingController::class, 'track'])
    ->name('qr.track')
    ->middleware('throttle:' . config('campaigns.rate_limits.qr_scan.max_attempts', 50) . ',' . config('campaigns.rate_limits.qr_scan.decay_minutes', 1));


Route::post('/track-button-click', [ButtonTrackingController::class, 'track'])
    ->name('button.track')
    ->middleware('throttle:' .
        config('campaigns.rate_limits.button_click.max_attempts', 50) . ',' .
        config('campaigns.rate_limits.button_click.decay_minutes', 1));
