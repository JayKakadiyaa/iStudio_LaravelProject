<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // This takes the user to your main static-designed index page
        return view('frontend.index');
    }

    public function dashboard()
    {
        // This handles the new "Stockyard Dashboard" view
        return view('frontend.dashboard');
    }
}