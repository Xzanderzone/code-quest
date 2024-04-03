<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register(Request $request){
        
        $inputs = $request->validate([
            'name' => 'required|unique:users|min:2|max:50', 
            'password' => 'min:3|required_with:password-check|same:password-check',
            'password-check' => 'required'
        ]);
            $user = User::create($inputs);
            auth()->login($user);
        
        return redirect('/story');
    }

    public function login(Request $request) {
        $inputs = $request->validate([
            'name' => 'required', 
            'password' => 'required'
        ]);
        // auth()->attempt(['name' => $inputs['name'], 'password' => $inputs['password']]) ;
        if (auth()->attempt(['name' => $inputs['name'], 'password' => $inputs['password']])) {
            $user = User::where('name', $inputs['name'])->first();
            return redirect('/story');
        } else {
            return back()->withErrors(['password' => 'Invalid username or password.'])->withInput();
        }
    }

    public function logout() {
        $user = Auth::user(); // om te vermijden dat het na vanzelf afmelden door timeout, we een error krijgen bij afmelden
        if ($user) {

            auth()->logout();
        }
        return view('landingpage');
    }
}