<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StoryController extends Controller
{
    public function getPageArray(){
        return ["100","101","102","103","104","105","106","107",
        "mastermind",
        "201","202","203","204","205",
        "guessing","rockPS",
        "301","302","303","304","305","306",
        "memory",
        "401","402","403","404","405","406",
        "slider",
        "501","502","503","504","505",
        "end"];
    }
    
    public function story() {
        $user = Auth::user();
        $pages=StoryController::getPageArray();
        $progress=0;
        if($user)$progress = $user->progress??0;
        else return redirect('/');//prevents crashing on invalid user
        $user->update(['progress' => $progress]);
        return view($pages[$progress], ['user' => $user]);
    }

    public function cv() {
        $user = Auth::user();
        if (!$user) {
            return redirect('/');
        }
        return view('cv', ['user' => $user]);
    }

    public function nextPage() {
            $user = Auth::user();
            $user->progress += 1;
            $user->save();
            return redirect('/story');
    }

    public function chooseCharacter(Request $request) {
        $request->validate([
            'character' => 'required'
        ]);
        $character = $request->character;

        $user = Auth::user();
        $user->character = $character;

        $user->progress += 1;
        $user->save();        

        return redirect('/story');
    }

    public function seats(Request $request)  {
        $request->validate([
            'seats' => 'required'
        ]);

        $user = Auth::user();
        $user->seats= $request->seats;

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    } 
    public function guessing(Request $request)  {
        $request->validate([
            'skill' => 'required'
        ]);
        $user = Auth::user();
        $user->guessing= $request->skill;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }
    public function rockps(Request $request)  {
        $request->validate([
            'skill' => 'required'
        ]);
        $user = Auth::user();
        $user->rockps= $request->skill;
        $user->progress += 1;
        $user->score += 10;
        $user->save();

        return redirect('/story');
    }  
    public function slider(Request $request)  {
        $request->validate([
            'skill' => 'required'
        ]);
        $user = Auth::user();
        $user->slider= $request->skill;
        $user->progress += 1;
        $user->score += 10;
        $user->save();

        return redirect('/story');
    }   
    public function mastermind(Request $request)  {
        $request->validate([
            'skill' => 'required'
        ]);
        $user = Auth::user();
        $user->mastermind= $request->skill;
        $user->progress += 1;
        $user->score += 10;
        $user->save();

        return redirect('/story');
    }   
    public function memory(Request $request)  {
        $request->validate([
            'skill' => 'required',
            'skill2' => 'required',
            'skill3' => 'required'
        ]);
        $user = Auth::user();
        $user->memory1= $request->skill1;
        $user->memory2= $request->skill2;
        $user->memory3= $request->skill3;
        $user->progress += 1;
        $user->score += 10;
        $user->save();

        return redirect('/story');
    }   

    public function cards(Request $request) {

        $request->validate([
            'card' => 'required'
        ]);

        $user = Auth::user();
        $user->card = $request->card;

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function cardReason(Request $request) {
        $request->validate([
            'card_reason' => 'required'
        ]);
        $user = Auth::user();
        $user->card_reason = $request->card_reason;

        $user->score += 5;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function toiletChoice(Request $request) {
        $request->validate([
            'toilet_choice' => 'required'
        ]);
        $user = Auth::user();
        $user->toilet_choice = $request->toilet_choice;

        if($request->toilet_choice !== "null") {
            $user->score += 5;
        }

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function extraToiletSkill(Request $request) {
        $user = Auth::user();

        if ($user->seats === 'empty-table') {
            $user->extra_toilet = "Empathy";
        } else {
            $user->extra_toilet = "Positive Attitude";
        }
        
        $user->score += 5;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function deleteCardReason(Request $request) {
        $user = Auth::user();
        $user->card_reason = null;

        $user->score -= 5;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function techTalkTopic(Request $request) {
        $request->validate([
            'tech_talk' => 'required'
        ]);
        $user = Auth::user();
        $user->tech_talk = $request->tech_talk;

        if($request->tech_talk !== "null") {
            $user->score += 5;
        }

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function feedback(Request $request) {
        $request->validate([
            'feedback' => 'required'
        ]);
        $user = Auth::user();
        $user->feedback = $request->feedback;

        if($request->feedback !== "null") {
            $user->score += 5;
        }

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function developerTrack(Request $request) {
        $request->validate([
            'track' => 'required'
        ]);
        $user = Auth::user();
        $user->track = $request->track;

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function trackFirstSkill(Request $request) {
        $request->validate([
            'track_first' => 'required'
        ]);
        $user = Auth::user();
        $user->track_first = $request->track_first;

        $user->score += 5;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function trackSecondSkill(Request $request) {
        $request->validate([
            'track_second' => 'required'
        ]);
        $user = Auth::user();
        $user->track_second = $request->track_second;

        if($request->track_second !== "null") {
            $user->score += 5;
        }
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function celebrationChoice(Request $request) {
        $request->validate([
            'celebration' => 'required'
        ]);
        $user = Auth::user();
        $user->celebration = $request->celebration;

        $user->score += 5;
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }
}
