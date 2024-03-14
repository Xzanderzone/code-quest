<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('00_landingpage');
});

Route::get('/login', function () {
    return view('01_login');
});

Route::get('/character', function () {
    return view('02_character');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/cv', function () {
    return view('cv');
});

