<?php

namespace App\Http\Controllers;

use App\Constants\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $resume = Resume::all();

        return view('home.index', compact('resume'));
    }
}
