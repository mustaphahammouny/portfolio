<?php

namespace App\Http\Controllers;

use App\Constants\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $resume = [
            'info' => Resume::INFO,
            'experiences' => Resume::EXPERIENCES,
            'education' => Resume::EDUCATION,
            'skills' => Resume::SKILLS,
            'personality' => Resume::PERSONALITY,
            'languages' => Resume::LANGUAGES,
        ];

        return view('home.index', compact('resume'));
    }
}
