@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    @include('flash')
    @include('errors')
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
           Upload an Image for your course
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <form data-single="true" action="{{route('instructor.processcourseimage', $course->id)}}" method="POST" class="dropzone border-gray-200 border-dashed" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box">
                    <div class="fallback"> <input name="course_image" type="file" /> </div>
                    <div class="dz-message" data-dz-message> <div class="text-lg font-medium">Drop your course image file here or click to upload us the file finder.</div>
                    <div class="text-gray-600"> The image should be less than 2 MB but still retain its quality</div> </div>
                    <div>
                     <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white w-full" type="submit">Upload Course Image</button>
                    </div>

            </div>
        </form>
        </div>

    </div>


</div>
<!-- END: General Report -->

@endsection
