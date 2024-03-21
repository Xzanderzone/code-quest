<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoryController;

Route::get('/', [UserController::class, 'logout']);
Route::get('/cv', [StoryController::class, 'cv']);
Route::get('/story', [StoryController::class, 'story']);
Route::get('/next', [StoryController::class, 'nextPage']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::post('/choose-character', [StoryController::class, 'chooseCharacter']);

// Route::get('/101', function () {
//     return view('101');
// });

// Route::get('/102', [StoryController::class, 'nextPage']);
Route::post('/seats', [StoryController::class, 'seats']);
// Route::get('/104', [StoryController::class, 'nextPage']);
Route::post('/cards', [StoryController::class, 'cards']);
Route::post('/card-reason', [StoryController::class, 'cardReason']);
// Route::get('/107', [StoryController::class, 'nextPage']);
// Route::get('/108', [StoryController::class, 'nextPage']);

// Route::get('/200', [StoryController::class, 'mastermindCheck']);

Route::get('/slider', function () {
    return view('slider');
});
Route::get('/guessing', function () {
    return view('guessing');
});
Route::get('/rockPS', function () {
    return view('rockPS');
});
Route::get('/memory', function () {
    return view('memory');
});


