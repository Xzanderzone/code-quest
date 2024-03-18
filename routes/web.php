<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'logout']);

Route::get('/whoareyou', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/00', function () {
    return view('00');
});

Route::get('/slider', function () {
    return view('slider');
});
Route::get('/guessing', function () {
    return view('guessing');
});
Route::get('/rockPS', function () {
    return view('rockPS');
});

Route::get('/cv', function () {
    return view('cv');
});

