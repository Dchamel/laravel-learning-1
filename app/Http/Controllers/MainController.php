<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homePage() {
        return view('home');
    }

    public function aboutPage() {
        return view('about');
    }

    public function reviewPage() {
        $reviews = new Contact();
        return view('review',['reviews' => $reviews->all()]);
    }

    public function reviewCheck(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('reviewPage');

    }
}
