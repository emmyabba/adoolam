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
                            <input type="text" class="input w-full border mt-2 " placeholder="Enter your course title here">
                        </div>
                        <div class="mt-3">
                            <label>Course Description</label>
                            <form method="post"> <textarea class="summernote" name="editor" placeholder="j"></textarea> </form>
                        </div>
                        <div class="mt-3">
                            <label>is this a Free Course?</label>
                            <select  data-hide-search="true" class="select2 w-full">
                                <option>-- select --</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label>Course Price</label>
                            <input type="text" class="input w-full border mt-2" placeholder="# 00.00">
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
