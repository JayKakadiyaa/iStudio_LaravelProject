<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; // Ensure you have created the Contact Model

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Store the contact form data into the database.
     */
    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Create the record in the 'contacts' table
        // This uses the fillable properties defined in your Contact model
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // 3. Redirect back with a success message for the user
        return back()->with('success', 'Thank you for contacting iSTUDIO! Your message has been saved.');
    }
}