<?php

namespace App\Http\Controllers;

use App\Constants\Projects;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::ALL;

        return view('projects.index', compact('projects'));
    }

    public function show()
    {

    }
}
