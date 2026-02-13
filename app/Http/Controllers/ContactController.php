<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Send email to specific address
        Mail::to('diyweboffi@gmail.com')->send(new ContactFormMail($validated));
        
        return back()->with('success', 'Thank you! Your message has been sent successfully. We will contact you soon.');
    }
}
