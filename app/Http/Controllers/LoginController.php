<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    public function index () 
    {
        return view("pages.loginpage");
    }

    public function login(Request $request) {


        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);


        $user = User::where('name', $request->name)->first();

        if (Auth::attempt($credentials)) { // No need to specify guard if using default
            $request->session()->regenerate(); // Prevents session fixation
            return redirect()->route('dashboard');
        }


        return back()->withErrors(['name' => 'Invalid credentials']);
    }
}
