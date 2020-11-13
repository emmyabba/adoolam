

<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{!! asset('userback/images/logo.svg') !!}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="LEFT4CODE">
        <title>Instructor Registration</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{!! asset('userback/css/app.css') !!}" />
        <link rel="stylesheet" href="{!! asset('userback/css/bootstrap.min.css') !!}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{!! asset('userback/images/logo.svg') !!}">
                        <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{!! asset('userback/images/illustration.svg') !!}">
                        <div class="-intro-x text-white font-small text-4xl leading-tight mt-10">
                           Create an account to get started.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Manage all your courses in one place</div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <form action="{{ route('instructor.register') }}" method="POST">
                    @csrf
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. </div>
                        <div class="intro-x mt-8">

                                @foreach ($errors->all() as $error)
                                <ul class="alert alert-danger">
                                    <li>{{ $error }}</li>
                                </ul>
                                @endforeach

                            <input type="email" class="intro-x login__input input input--lg border border-gray-300 block {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="john@doe.com" value="{{ old('email') }}" name="email">

                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Phone Number" class="form-controlform-control-prepended" name="phone_number">

                            <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" name="password">
                            <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation" name="password_confirmation">
                        </div>
                        <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="checkbox" class="input border mr-2" id="agreement" name="agreement">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Adoolam</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>.
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3" type="submit">Register</button>
                        <a href="{{route('instructor.login')}}" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign in</a>
                        </div>
                    </div>
                </div>
                <!-- END: Register Form -->
                </form>
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{!! asset('userback/dist/js/app.js') !!}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
