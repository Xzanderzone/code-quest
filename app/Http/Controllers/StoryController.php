<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StoryController extends Controller
{
    public function getPageArray(){
        return ["100","101","102","103","104","105","106","107",
        "108",
        "201","202","203","204","205","guessing","rockPS",
        "301","302","303","304","305","306",
        // "memory",
        "slider",
        "999"];
    }
    public function story() {
        $user = Auth::user();
  
        $pages=StoryController::getPageArray();
        $progress = $user->progress ;
        //100 to check older accounts from before array method
        if (!$progress || $progress>=100) {
            $progress = 0;
        } 

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
        // if(in_array($id,StoryController::getPageArray())){
        $user = Auth::user();
        $user->progress += 1;
        $user->save();

        return redirect('/story');
        // }else dd("page not found(story controller nextPage with id: ".$id);
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

        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function mastermindCheck(Request $request) {
        
    }

    public function toiletChoice(Request $request) {
        $request->validate([
            'toilet_choice' => 'required'
        ]);
        $user = Auth::user();
        $user->toilet_choice = $request->toilet_choice;

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
        
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function deleteCardReason(Request $request) {
        $user = Auth::user();
        $user->card_reason = null;

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
    
}
