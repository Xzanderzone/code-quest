<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('01_landing');
});

Route::get('/02', function () {
    return view('02_character');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/cv', function () {
    return view('cv');
});

