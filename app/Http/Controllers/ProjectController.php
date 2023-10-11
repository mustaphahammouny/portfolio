<?php

namespace App\Http\Controllers;

use App\Constants\Projects;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::ALL;

        return view('coming-soon');
        // return view('projects.index', compact('projects'));
    }
}
