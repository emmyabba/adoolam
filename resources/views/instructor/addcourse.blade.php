@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Add Acourse
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <div class="intro-y box">

                <div class="p-5" id="input">
                    <div class="preview">
                        <div>
                            <label>Course Title</label>
                            <input type="text" class="input w-full border mt-2 " placeholder="Enter your course title here" name="course_title">
                        </div>
                        <div class="mt-3">
                            <label>Course Description</label>
                            <textarea class="summernote" name="course_description">Description Goes here</textarea>
                        </div>
                        <div class="mt-3">
                            <label>is this a Free Course?</label>
                            <select  data-hide-search="true" class="select2 w-full" name="course_type">
                                <option>-- select --</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label>Course Price</label>
                            <input type="text" class="input w-full border mt-2" placeholder="# 00.00" name="course_price">
                        </div>

                        <div class="mt-3">
                            <button type="button" class="button bg-theme-1 text-white mt-5 w-full">Save</button>
                        </div>
                    </div>

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
