<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoryController;

Route::get('/', [UserController::class, 'logout']);
Route::get('/story', [StoryController::class, 'story']);

Route::get('/whoareyou', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::post('/choose-character', [StoryController::class, 'chooseCharacter']);

Route::get('/101', function () {
    return view('101');
});

Route::get('/102', [StoryController::class, 'nextPage']);
Route::post('/seats', [StoryController::class, 'seats']);
Route::get('/104', [StoryController::class, 'nextPage']);
Route::post('/cards', [StoryController::class, 'cards']);
Route::post('/card-reason', [StoryController::class, 'cardReason']);
Route::get('/107', [StoryController::class, 'nextPage']);
Route::get('/mastermind', function () {
    return view('mastermind');
});



Route::get('/slider', function () {
    return view('slider');
});

Route::get('/cv', function () {
    return view('cv');
});

