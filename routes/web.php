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
Route::post('/card-reason', [StoryController::class, 'card-reason']);


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

