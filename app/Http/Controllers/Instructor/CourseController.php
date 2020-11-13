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
        $active = 'addcourse';
        return view('instructor.addcourse', \compact('title', 'active'));
    }

    public function createcourse()
    {
        return Validator::make($data, [
            'course_title' => 'required|max:255|unique:courses',
            'course_description' => 'required|max:255',
            'course_price' => 'required',
            'agreement'=>'required'
        ]);
    }

}
