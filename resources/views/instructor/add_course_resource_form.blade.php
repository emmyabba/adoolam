@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    @include('flash')
    @include('errors')
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
          Add New Resource to {{$course->course_name}}
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <form data-single="true" action="{{route('instructor.processcourseresource', $course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box">
                    <div class="fallback">
                        <input name="course_image" type="file" />
                    <input name="course_id" type="hidden" value="{{$course->id}}" />
                    </div>

            </div>
            <br>
            <div class="intro-y box">

                <div>
               <p><button class="button w-24 mr-1 mb-2 bg-theme-1 text-white w-full" type="submit">Save Resource</button></p>
                </div>

        </div>
        </form>
        </div>

    </div>


</div>
<!-- END: General Report -->


@endsection
