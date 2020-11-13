@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
           Dashboard
        </h2>


    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        {{-- <div class="ml-auto">
                            <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                        </div> --}}
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">&#8358; 0</div>
                    <div class="text-base text-gray-600 mt-1">course Sales</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="book-open" class="report-box__icon text-theme-11"></i>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">0</div>
                    <div class="text-base text-gray-600 mt-1">My courses</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="users" class="report-box__icon text-theme-12"></i>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">0</div>
                    <div class="text-base text-gray-600 mt-1">Enrolled students</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="activity" class="report-box__icon text-theme-9"></i>

                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">0</div>
                    <div class="text-base text-gray-600 mt-1">My hits</div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- END: General Report -->

@endsection
