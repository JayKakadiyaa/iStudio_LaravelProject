<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // This model talks to your 'istudio' DB
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     * Path: resources/views/frontend/register.blade.php
     */
    public function index()
    {
        return view('frontend.register');
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(Request $request)
    {
        // 1. Validate the input
        // 'confirmed' requires an input field named 'password_confirmation' in your blade
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Create the user in MySQL (istudio database)
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Encrypts password for security
        ]);

        // 3. Log the user in immediately after account creation
        Auth::login($user);

        // 4. Redirect to the green welcome dashboard
        // We use the named route 'dashboard' from your web.php
        return redirect()->route('dashboard')->with('success', 'Account created successfully! Welcome to iSTUDIO.');
    }
}