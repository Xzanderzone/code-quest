<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('00_landingpage');
});

Route::get('/01', function () {
    return view('01_login');
});

Route::get('/02', function () {
    return view('02_character');
});

Route::get('/cv', function () {
    return view('cv');
});

