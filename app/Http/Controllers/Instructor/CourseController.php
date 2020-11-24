<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Course;
use Auth;
use App\Courseresource;


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

        return redirect(route('instructor.uploadcourseimage', $course->id))->with('success', 'The course '.$course->course_title.' was added successfully. Please upload an image for the course.');

    }

    public function manage() {

        $title = 'Manage Course';
        $active = 'course';

        $mycourses = Course::where('instructor_id', Auth::guard('instructor')->user()->id)->paginate(10);

        return view('instructor.manage', \compact('title', 'active', 'mycourses'));
    }

    public function uploadcourseimage($id) {

        $course = Course::find($id);

        $title = 'Course Image';
        $active = 'course';
        return view('instructor.courseimage', \compact('title', 'active', 'course'));
    }

    public function processcourseimage(Request $request){

        $request->validate([
            'course_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'required' => 'You have to uplaod an image for the course.'
        ]
    );

    $filename = mt_rand(1, time()).$request->course_image->getClientOriginalName();

        $request->course_image->storeAs('course-image', $filename, 'public');

        $thiscourse = Course::where('id', $request->course_id)->first();

        $thiscourse->update(['course_avatar' => $filename]);

        return redirect(route('instructor.managethis.course', $request->course_id))->with('success', 'The image was added to the course successfully');

    }

    public function managethis($id) {

        $thiscourse = Course::find($id);

        $thiscourseresource = Courseresource::where('course_id',$id)->get();

        $title = $thiscourse->course_title;
        $active = 'course';
        return view('instructor.managethiscourse', \compact('title', 'active', 'thiscourse', 'thiscourseresource'));
    }

    public function myprofile($id) {
        $title = 'My profile';
        $active = 'profile';
        return view('instructor.profile', \compact('title', 'active'));
    }

    public function edit($id) {

        $thiscourse = Course::find($id);

        $title = $thiscourse->course_title;
        $active = 'course';
        return view('instructor.edit', \compact('title', 'active', 'thiscourse'));
    }

    public function student() {

        $title = 'My students';
        $active = 'student';
        return view('instructor.students', \compact('title', 'active'));
    }

    public function finance() {

        $title = 'My Finance';
        $active = 'finance';
        return view('instructor.finance', \compact('title', 'active'));
    }

    public function uploadcourseresource($id) {

        $course = Course::find($id);

        $title = 'Course Resources';
        $active = 'course';
        return view('instructor.add_course_resource_form', \compact('title', 'active', 'course'));
    }

    public function processcourseresource(Request $request){

        $request->validate([
            'course_resource_file' => 'required|mimes:jpeg,png,jpg,gif,svg,mp3,mp4,pdf,3gp|max:2048',
            'course_resource_type' => 'required',
        ]
     );

     $filename = mt_rand(1, time()).$request->course_resource_file->getClientOriginalName();

    $couresource = New Courseresource;

    $couresource->course_id = $request->course_id;

    $couresource->course_resource_type = $request->course_resource_type;

    $couresource->course_resource_name = $filename;

    $couresource->save();

    $request->course_resource_file->storeAs('course-resource', $filename, 'public');


    return redirect(route('instructor.managethis.course', $request->course_id))->with('success', 'The course resource was added to the course successfully');

    }



}
