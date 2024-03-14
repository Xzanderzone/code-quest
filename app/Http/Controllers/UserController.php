<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register(Request $request, $slug = null){
        
        $inputs = $request->validate([
            'name' => 'required', 
            'password' => 'required',
            'password-check' => 'required'
        ]);

        $user = User::where('name', $inputs['name'])->first();

        if ($user) {
            dd("The username '" . $inputs['name'] . "' already exists broh");
        }

        if ($inputs['password'] === $inputs['password-check']) {
            $inputs['password'] = bcrypt($inputs['password']);
            $user = User::create($inputs);
            auth()->login($user);
        } else {
            dd("The passwords are not the same, broh!");
        }
        
        return redirect('/00');
    }

    public function login(Request $request) {
        $inputs = $request->validate([
            'name' => 'required', 
            'password' => 'required'
        ]);

        $user = User::where('name', $inputs['name'])->first();

        if (!$user) {
            dd("The username '" . $inputs['name'] . "' is not in the database, bro");
        }

        if (!auth()->attempt(['name' => $inputs['name'], 'password' => $inputs['password']])) {
            dd('Not the correct password broh');
        } else {
        $request->session()->regenerate();
        }
        return redirect('/00');
    }

    public function logout() {
        $user = Auth::user(); // om te vermijden dat het na vanzelf afmelden door timeout, we een error krijgen bij afmelden
        if ($user) {

            auth()->logout();
        }
        return view('landingpage');
    }
}
