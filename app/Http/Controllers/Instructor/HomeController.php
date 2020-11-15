<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Auth;
use App\Course;

class HomeController extends Controller
{

    protected $redirectTo = '/instructor/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('instructor.auth:instructor');
    }

    /**
     * Show the Instructor dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = 'Instructor Dashboard';
        $active = 'dashboard';

        $coursecount = Course::where('instructor_id', Auth::guard('instructor')->user()->id)->count();
        return view('instructor.home', \compact('title', 'active', 'coursecount'));
    }

}
