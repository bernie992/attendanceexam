<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApplicantController extends Controller
{
    public function examinee()
    {
        return view('jobseekers/examinee');
    }
    public function seek()
    {
        return view('jobseekers/seekers');
    }
}
