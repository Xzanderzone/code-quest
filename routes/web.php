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

Route::post('/toilet-choice', [StoryController::class, 'toiletChoice']);
Route::post('/extra-toilet-skill', [StoryController::class, 'extraToiletSkill']);
Route::post('/card-reason-update', [StoryController::class, 'deleteCardReason']);
Route::post('/tech-talk', [StoryController::class, 'techTalkTopic']);
Route::post('/feedback', [StoryController::class, 'feedback']);
Route::post('/track', [StoryController::class, 'developerTrack']);
Route::post('/track-first-choice', [StoryController::class, 'trackFirstSkill']);
Route::post('/track-second-choice', [StoryController::class, 'trackSecondSkill']);
Route::post('/celebration', [StoryController::class, 'celebrationChoice']);

Route::post('/mastermind', [StoryController::class, 'mastermind']);
Route::post('/guessing', [StoryController::class, 'guessing']);
Route::post('/rockps', [StoryController::class, 'rockps']);
Route::post('/memory', [StoryController::class, 'memory']);
Route::post('/slider', [StoryController::class, 'slider']);

// Route::get('/slider', function () {
//     return view('slider');
// });
// Route::get('/guessing', function () {
//     return view('guessing');
// });
// Route::get('/rockPS', function () {
//     return view('rockPS');
// });
// Route::get('/memory', function () {
//     return view('memory');
// });
// Route::get('/mastermind', function () {
//     return view('108');
// });


