<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrTrackingController;

Route::get('/', function () {
    return view('pages.skc-landing');
})->name('skc.landing');

Route::get('/support', function () {
    return view('pages.self-landing-page');
})->name('skc.support');

Route::get('/qr/{campaign}', [QrTrackingController::class, 'track'])
    ->name('qr.track');
