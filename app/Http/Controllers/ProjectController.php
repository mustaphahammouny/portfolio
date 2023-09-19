<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = config('projects');

        return view('projects.index', compact('projects'));
    }

    public function show()
    {

    }
}
