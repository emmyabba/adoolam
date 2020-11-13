<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;

class CourseController extends Controller
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
        $title = 'Add Course';
        return view('instructor.addcourse', \compact('title'));
    }

}
