@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    @include('flash')
    <div class="intro-y flex items-center mt-8">

        <h2 class="text-lg font-medium mr-auto">
           {{$thiscourse->course_title}}
        </h2>
    </div>

    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">

            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="" class="square-full" src="{{asset('/storage/course-image/'.$thiscourse->course_avatar)}}">
                </div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-">
                    <h2> @if($thiscourse->course_type == 'Paid'){{$thiscourse->course_type. ' Course'}}@else{{$thiscourse->course_type. ' Course'}}@endif</h2>
                  </div>

            </div>

            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">&#8358; {{$thiscourse->course_price}}</div>
                    <div class="text-gray-600">Price</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">0</div>
                    <div class="text-gray-600">Students</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">&#8358;</div>
                    <div class="text-gray-600">Sales</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <button onClick="location.href='{{route('instructor.editcourse', $thiscourse->id)}}'" class="button px-2 mr-1 mb-2 bg-theme-1 text-white" type="submit" title="Edit"> <span class="w-5 h-5 flex items-center justify-center" title="Edit"> <i data-feather="edit" class="w-4 h-4"></i> </span> </button>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> <span class="w-5 h-5 flex items-center justify-center" title="delete"> <i data-feather="trash" class="w-4 h-4" title="delete"></i> </span> </button>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <button onClick="location.href='{{route('instructor.uploadcourseimage', $thiscourse->id)}}'" class="button px-2 mr-1 mb-2 bg-gray-200 text-gray-600" title="Image Update"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="image" class="w-4 h-4"></i> </span> </button>
                </div>
            </div>
        </div>

        </div>

    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div class="tab-content__pane active" id="dashboard">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Course Resources
                        </h2>
                        <div class="dropdown relative ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="{{route('instructor.add.resource', $thiscourse->id)}}"> <i data-feather="plus" class="w-5 h-5 text-gray-700"></i> </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="overflow-x-auto">
                            <table class="table">
                        @foreach ($thiscourseresource as $item)
                                    <tr class="bg-gray-200">
                                        <td class="border-b">{{$item->course_resource_type}}</td>
                                        <td class="border-b"><a target="_new" href="{{asset('/storage/course-resource/'.$item->course_resource_name)}}">{{$item->course_resource_name}}</a></td>
                                    </tr>
                                </tbody>
                        @endforeach
                    </table>
                </div>
                    </div>
                </div>
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Course Description
                        </h2>
                        <div class="dropdown relative ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                        </div>

                    </div>
                    <div class="p-5">
                        <p>{!! html_entity_decode($thiscourse->course_description) !!}</p>
                    </div>
                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Work In Progress -->

                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->



</div>
<!-- END: General Report -->

@endsection
