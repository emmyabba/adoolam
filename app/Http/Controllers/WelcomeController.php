<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class WelcomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('welcome', \compact('courses'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dev()
    {
        return view('dev');
    }

    public function freecourses()
    {
        return view('dev');
    }

    public function allcourses()
    {
        return view('dev');
    }

    public function topratedcourses()
    {
        return view('dev');
    }

}
