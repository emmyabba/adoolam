@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Manage Course
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <div class="intro-y box">

                <div class="p-5" id="input">
                <form method="POST" action="{{route('instructor.save.course')}}">
                    @csrf
                    @include('errors')
                    <div class="preview">
                        <div>
                            <label>Course Title</label>
                        <input type="text" class="input w-full border mt-2 " placeholder="Enter your course title here" name="course_title" value="{{old('course_title')}}">
                        </div>
                        <div class="mt-3">
                            <label>Course Description</label>
                            <textarea class="summernote" name="course_description">{{old('course_description')}}</textarea>
                        </div>
                        <div class="mt-3">
                            <label>is this a Free Course?</label>
                            <select  data-hide-search="true" class="select2 w-full" name="course_type">
                                <option>-- select --</option>
                                <option value="Free">Free</option>
                                <option value="Paid">Paid</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label>Course Price</label>
                            <input type="text" class="input w-full border mt-2" placeholder="# 00.00" name="course_price" {{old('course_title')}}>
                        </div>

                        <div class="mt-3">
                            <button class="button bg-theme-1 text-white mt-5 w-full" type="submit">Save</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-2">
            <div class="intro-y box">
                <p></p>
            </div>
        </div>
    </div>


</div>
<!-- END: General Report -->

@endsection
