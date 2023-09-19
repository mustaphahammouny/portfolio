<?php

namespace App\Http\Controllers;

class BlockController extends Controller
{
    public function index()
    {
        $blocks = config('blocks');

        return view('blocks.index', compact('blocks'));
    }

    public function show()
    {

    }
}
