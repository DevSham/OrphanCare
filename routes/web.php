<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.skc-landing');


})->name('skc.landing');;
