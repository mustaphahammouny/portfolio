<?php

namespace App\Http\Controllers;

use App\Constants\Resume;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $info = Resume::INFO;

        return view('contact.index', compact('info'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        return redirect()->back()->with([
            'status' => 'success',
            'message' => ' Thank you for taking the time to reach out. I\'ll get back to you as soon as possible.',
        ]);
    }
}
