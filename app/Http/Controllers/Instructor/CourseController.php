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
        $active = 'course';
        return view('instructor.addcourse', \compact('title', 'active'));
    }

    public function createcourse(Request $request)
    {
         $request->validate([
            'course_title' => 'required',
            'course_description' => 'required'
        ]);

        $course = new Course;
        $course->instructor_id = Auth::guard('instructor')->user()->id;
        $course->course_title = $request->course_title;
        $course->course_description = $request->course_description;
        $course->course_status = 1;
        $course->course_type = $request->course_type;
        $course->course_price = $request->course_price;

        $savedcourse = $course->save();

        return redirect(route('instructor.managethis.course', $course->id))->with('success',  $course->course_title.' course Was created successfully');

    }

    public function manage() {

        $title = 'Manage Course';
        $active = 'course';

        $mycourses = Course::where('instructor_id', Auth::guard('instructor')->user()->id)->get();

        return view('instructor.managecourse', \compact('title', 'active', 'mycourses'));
    }

    public function managethis($id) {

        $course = Course::find($id);

        $title = 'Manage Course';
        $active = 'course';
        return view('instructor.managethiscourse', \compact('title', 'active', 'course'));
    }

    public function myprofile($id) {

        $title = 'My profile';
        $active = 'profile';
        return view('instructor.profile', \compact('title', 'active'));
    }

}
