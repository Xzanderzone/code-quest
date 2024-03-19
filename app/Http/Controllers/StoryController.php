<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    public function story() {
        $user = Auth::user();
        $progress = $user->progress;

        if (!$progress) {
            $progress = 100;
        } 

        $user->update(['progress' => $progress]);

        return view($progress, ['user' => $user]);
    }

    public function nextPage() {
        $user = Auth::user();
        $user->progress += 1;
        $user->save();

        return redirect('/story');
    }

    public function chooseCharacter(Request $request) {
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


}
