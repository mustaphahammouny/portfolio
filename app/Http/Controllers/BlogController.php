<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = config('blogs');

        return view('blogs.index', compact('blogs'));
    }

    public function show()
    {

    }
}
