@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    @include('flash')
    @include('errors')
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
          Add New Resource to <span>{{$course->course_title}}</span>
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <form data-single="true" action="{{route('instructor.process.resource', $course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <div class="p-5" id="input">
                    <div class="preview">
                        <div>
                            <label>Resource Type</label>
                        <div class="mt-2">
                            <select data-hide-search="true" class="select2 w-full" name="course_resource_type">
                                <option value="">-- select --</option>
                                <option value="PDF">PDF</option>
                                <option value="Video">Video</option>
                                <option value="Audio">Audio</option>
                            </select>
                        </div>
                        </div>
                        <div class="mt-3">
                            <input name="course_resource_file" type="file" />
                            <input name="course_id" type="hidden" value="{{$course->id}}" />
                         </div>
                    </div>
                </div>

            </div>
        </div>

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
