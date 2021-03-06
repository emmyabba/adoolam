<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Adoolam</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="www.logeaksolutions.com" />
    <meta name="email" content="" />
    <meta name="website" content="" />
	<link rel="stylesheet" href="{!! asset('adool/css/studiare-assets.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('adool/css/fonts/font-awesome/font-awesome.min.css') !!}" media="screen">
	<link rel="stylesheet" type="text/css" href="{!! asset('adool/css/fonts/elegant-icons/style.css') !!}" media="screen">
	<link rel="stylesheet" type="text/css" href="{!! asset('adool/css/fonts/iconfont/material-icons.css') !!}" media="screen">
	<link rel="stylesheet" type="text/css" href="{!! asset('adool/css/style.css') !!}">
    <script type="text/javascript" src="{!! asset('adool/js/extensions/revolution.extension.slideanims.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('adool/js/extensions/revolution.extension.actions.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('adool/js/extensions/revolution.extension.layeranimation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('adool/js/extensions/revolution.extension.navigation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('adool/js/extensions/revolution.extension.parallax.min.js') !!}"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('userback/images/favicon_io/apple-touch-icon.png') !!}">
        <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('userback/images/favicon_io/favicon-32x32.png') !!}">
        <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('userback/images/favicon_io/favicon-16x16.png') !!}">


</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="/">
						<img src="{!! asset('adool/images/adoolam-logo.png')!!}" alt="">
					</a>

					<a href="#" class="mobile-nav-toggle">
						<span></span>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="drop-link">
								<a class="active" href="{{route('welcome')}}">Home</a>
                            </li>

							<li class="drop-link">
								<a href="#">Courses <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown">
                                <li><a href="{{route('welcome.courses')}}">All courses</a></li>
									<li><a href="{{route('welcome.free.courses')}}">Free Courses</a></li>
									<li><a href="{{route('welcome.popular.courses')}}">Popular Coures</a></li>
									<li><a href="{{route('welcome.toprated.courses')}}">Top Rated Courses</a></li>
								</ul>
                            </li>
                            <li class="drop-link">
								<a href="{{route('instructor.register')}}">Instructors <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown">
									<li><a href="{{route('instructor.register')}}">Sign up</a></li>
									<li><a href="{{route('instructor.login')}}">Sign in</a></li>
								</ul>
                            </li>
                            <li class="drop-link">
								<a href="#">Learners <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown">
                                {{-- <li><a href="{{route('learner.register')}}">Signup</a></li> --}}
								</ul>
                            </li>
                            <li class="drop-link">
								<a class="active" href="{{route('welcome.about')}}">About</a>
							</li>

                        </ul>
                 	</div>
				</div>
			</nav>
            <div class="mobile-menu">
				<nav class="mobile-nav">
					<ul class="mobile-menu-list">
						<li>
							<a href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="drop-link">
							<a href="#">Courses</a>
							<ul class="drop-level">
                                <li><a href="{{route('welcome.courses')}}">All courses</a></li>
                                <li><a href="{{route('welcome.free.courses')}}">Free Courses</a></li>
                               <li> <a href="{{route('welcome.popular.courses')}}">Popular Coures</a></li>
                                <li><a href="{{route('welcome.toprated.courses')}}">Top Rated Courses</a></li>
							</ul>
						</li>
						<li class="drop-link">
							<a href="#">Instructors</a>
							<ul class="drop-level">
								<li><a href="{{route('instructor.register')}}">Sign up</a></li>
								<li><a href="{{route('instructor.login')}}">Sign in</a></li>
							</ul>
                        </li>
                        <li class="drop-link">
							<a href="#">Learners</a>
							<ul class="drop-level">
								<li><a href="#">Sign up</a></li>
								<li><a href="#">Sign in</a></li>
							</ul>
						</li>

						<li>
							<a class="active" href="{{route('welcome.about')}}">About</a>
						</li>
					</ul>
				</nav>
			</div>

		</header>
		<!-- End Header -->

        @yield('content')



		<!-- footer
			================================================== -->
		<footer>
			<div class="container">

				<div class="up-footer">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget text-widget">
								<a href="{{route('welcome')}}" class="footer-logo"><img src="{!! asset('adool/images/adoolam-logo.png')!!}" alt=""></a>
								<p></p>
								<ul>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">location_on</i>
										</div>
										<div class="contact-info-value">Minna Nigeria</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">phone_android</i>
										</div>
										<div class="contact-info-value">0000 000 0000</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget quick-widget">
								<h2>Quick Links</h2>
								<ul class="quick-list">
									<li><a href="#">Contact</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Courses</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Home</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget subscribe-widget">
								<h2></h2>


							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="footer-copyright copyrights-layout-default">
				<div class="container">
					<div class="copyright-inner">
						<div class="copyright-cell"> &copy; {{date('Y')}} <span class="highlight">Adoolam</span>.</div>
						<div class="copyright-cell">
							<ul class="studiare-social-links">
								<li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<script src="{!! asset('adool/js/studiare-plugins.min.js') !!}"></script>
	<script src="{!! asset('adool/js/jquery.countTo.js') !!}"></script>
	<script src="{!! asset('adool/js/popper.js') !!}"></script>
	<script src="{!! asset('adool/js/bootstrap.min.js') !!}"></script>
  	<script src="{!! asset('adool/js/gmap3.min.js') !!}"></script>
	<script src="{!! asset('adool/js/script.js') !!}"></script>

	@yield('scripts')


</body>
</html>
