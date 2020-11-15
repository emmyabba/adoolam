@extends('instructor.layouts.app')

@section('content')

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
                    <table class="table">
                        <thead>
                            <th> Title</th>
                            <th> Status</th>
                            <th> Type</th>
                            <th> Price</th>
                            <th></th>
                        </thead>

                        <tbody>
                            <td>
                                @foreach ($mycourses as $row)
                                <tr>
                                <td><a href="{{route('instructor.managethis.course', $row->id)}}">{{$row->course_title}}</a></td>
                                <td>@if($row->course_status == 1)<span class="px-5 mb-2 bg-theme-6 text-white">{{'Disabled'}}</span>@else:<span class="px-5 mb-2 bg-theme-9 text-white">{{'Enabled'}}</span>@endif</td>
                                <td>{{$row->course_type}}</td>
                                <td>&#8358; {{number_format($row->course_price)}}</td>
                                <td> <button onClick="location.href='{{route('instructor.managethis.course', $row->id)}}'" class="button px-2 mr-1 mb-2 bg-theme-1 text-white" type="submit" title="Edit"> <span class="w-5 h-5 flex items-center justify-center" title="Edit"> <i data-feather="edit" class="w-4 h-4"></i> </span> </button> <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> <span class="w-5 h-5 flex items-center justify-center" title="delete"> <i data-feather="trash" class="w-4 h-4" title="delete"></i> </span> </button> <button class="button px-2 mr-1 mb-2 bg-gray-200 text-gray-600" title="Image Update"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="image" class="w-4 h-4"></i> </span> </button> </td>
                                </tr>

                                @endforeach
                            </td>

                        </tbody>
                    </table>

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
