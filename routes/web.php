<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('01_landing');
});

Route::get('/02', function () {
    return view('02_character');
});
