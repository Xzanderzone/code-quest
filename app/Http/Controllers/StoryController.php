<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StoryController extends Controller
{
    public function getPageArray(){
        return ["100","101","102","103","104","105","106","107",
        // "mastermind",
        "guessing","rockPS",
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
            'seat' => 'required'
        ]);

        $user = Auth::user();
        $character = $request->character;
        $user->seats= $character;
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


}
