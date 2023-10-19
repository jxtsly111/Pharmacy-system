<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        return view('dashboard'); // Redirect to a dashboard or home page
    } else {
        // Authentication failed
        return back()->with('error', 'Invalid login credentials');
    }
}

public function logout()
{
    Auth::logout();

    return redirect('/'); // Redirect to a logged-out page or home page
}
}
