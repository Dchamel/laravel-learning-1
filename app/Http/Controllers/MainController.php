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
}
