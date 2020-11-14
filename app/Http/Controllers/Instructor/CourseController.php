<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Course;
use Auth;

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

    public function createcourse(Request $request)
    {
         $request->validate([
            'course_title' => 'required|max:255|unique:courses',
            'course_description' => 'required|max:255',
            'course_price' => 'required'
        ]);

        $course = new Course;
        $course->instructor_id = 1;
        $course->course_title = $request->course_title;
        $course->course_description = $request->course_description;
        $course->status = 1;
        $course->course_type = $request->course_type;
        $course->course_price = $request->course_price;

        $course->save();

        return redirect()->back()->with('success', 'Thank you for signing up. We will let you know when we go LIVE');

    }

}
