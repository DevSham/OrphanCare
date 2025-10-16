<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.skc-landing');
})->name('skc.landing');

Route::get('/support', function () {
    return view('pages.self-landing-page');
})->name('skc.support');
