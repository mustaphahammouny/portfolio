<?php

namespace App\Http\Controllers;

use  Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    public function download()
    {
        try {
            $resume = config('resume');
            $name = str_replace(' ', '-', $resume['info']['name']);

            // return view('pdf.resume', compact('resume'));

            $pdf = Pdf::loadView('pdf.resume', compact('resume'));

            return $pdf->download("$name.pdf");
        } catch (\Exception $e) {
            throw $e;
            // Session::flash('error', $e->getMessage());
        }
    }
}
