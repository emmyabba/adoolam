<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Course;

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

        $course = new Course;
        $course->instructor_id = $request->email;
        $course->course_title = $request->phone_number;
        $course->course_description = $request->designation;
        $course->status = $request->email;
        $course->course_type = $request->phone_number;
        $course->course_price = $request->designation;

        $course->save();

        return redirect()->back()->with('success', 'Thank you for signing up. We will let you know when we go LIVE');

    }

}
