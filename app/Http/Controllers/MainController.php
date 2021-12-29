<?php

namespace App\Http\Controllers;

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
        return view('review');
    }

    public function reviewCheck(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);
    }
}
