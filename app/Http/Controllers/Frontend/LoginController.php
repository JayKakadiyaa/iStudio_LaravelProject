<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        // 1. Validate inputs
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // 2. Check MySQL for matching user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirects to '/' (your dashboard)
            return redirect()->intended(route('dashboard'));
        }

        // 3. If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}