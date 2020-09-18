<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
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
