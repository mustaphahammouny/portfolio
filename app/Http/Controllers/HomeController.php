<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $resume = config('resume');

        return view('home.index', compact('resume'));
    }
}
