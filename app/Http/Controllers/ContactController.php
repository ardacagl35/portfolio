<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
            
            return response()->json([
                'message' => 'Thank you for your message! I will get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }
} 