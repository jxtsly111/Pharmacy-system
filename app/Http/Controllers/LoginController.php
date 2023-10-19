<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("welcome");
    }

    public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect('/dashboard'); // Redirect to a dashboard or home page
    } else {
        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid login credentials');
    }
}
}
