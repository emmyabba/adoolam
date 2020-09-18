
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Adoolam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adoolam" />
    <meta name="keywords" content="Adoolam" />
    <meta name="author" content="Adoolam" />
    <meta name="email" content="Adoolam" />
    <meta name="website" content="http://www.adoolam.com" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{!! asset('adoo/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{!! asset('adoo/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Magnific -->
    <link href="{!! asset('adoo/css/magnific-popup.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{!! asset('adoo/css/owl.carousel.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('adoo/css/owl.theme.default.min.css') !!}"/>
    <!-- FLEXSLIDER -->
    <link href="{!! asset('adoo/css/flexslider.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="{!! asset('adoo/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{!! asset('adoo/css/colors/default.css') !!}" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!----> <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="">
                    <img src="adoo/images/logo-dark.png" class="l-dark" height="24" alt="">
                    <img src="adoo/images/logo-light.png" class="l-light" height="24" alt="">
                </a>
            </div>
            <div class="buy-button">
                <a href="#">
                    <div class="btn btn-primary login-btn-primary">Login</div>
                    <div class="btn btn-light login-btn-light">Login</div>
                </a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="index.html">Home</a></li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)">Courses</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="#">All Courses</a></li>
                            <li><a href="#">Free Courses</a></li>
                            <li><a href="#">Rated Courses</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Coaching</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{route('instructor.login')}}">Become an instructor</a></li>
                        </ul>
                    </li>
                </ul><!--end navigation menu-->
                <div class="buy-menu-btn d-none">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Signup</a>
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">sign in</a>
                </div><!--end login button-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="main-slider">
        <ul class="slides">
            <li class="bg-slider d-flex align-items-center" style="background-image:url('adoo/images/course/bg01.jpg')">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="title-heading text-white mt-4">
                                <h1 class="display-4 title-dark font-weight-bold mb-3">You Can Learn Anything With Us</h1>
                                <p class="para-desc para-dark mx-auto text-light">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="#courses" class="btn btn-primary mt-2 mouse-down"><i class="mdi mdi-book-open-variant"></i> Find Courses</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </li>
            <li class="bg-slider d-flex align-items-center" style="background-image:url('adoo/images/course/bg02.jpg')">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="title-heading text-white mt-4">
                                <h1 class="display-4 title-dark font-weight-bold mb-3">Better Education For A Better Future </h1>
                                <p class="para-desc para-dark mx-auto text-light">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="#admission" class="btn btn-primary mt-2 mouse-down"><i class="mdi mdi-school"></i> Admission Now</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </li>
            <li class="bg-slider d-flex align-items-center" style="background-image:url('adoo/images/course/bg03.jpg')">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="title-heading text-white mt-4">
                                <h1 class="display-4 title-dark font-weight-bold mb-3">Education Is The Key of Success</h1>
                                <p class="para-desc para-dark mx-auto text-light">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="#instructors" class="btn btn-primary mt-2 mouse-down"><i class="mdi mdi-account"></i> Instructors</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </li>
        </ul>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- FEATURES START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card course-feature text-center overflow-hidden rounded shadow border-0">
                        <div class="card-body py-5">
                            <div class="icon">
                                <img src="images/icon/insurance.svg" class="avatar avatar-small" alt="">
                            </div>

                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Unlimited Access</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page reader will be of a page when looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="images/icon/insurance.svg" class="full-img" height="300" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4">
                    <div class="card course-feature text-center overflow-hidden rounded shadow border-0">
                        <div class="card-body py-5">
                            <div class="icon">
                                <img src="images/icon/graduation-hat.svg" class="avatar avatar-small" alt="">
                            </div>

                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Our Courses</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when reader will be of a page looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="images/icon/graduation-hat.svg" class="full-img" height="300" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4">
                    <div class="card course-feature text-center overflow-hidden rounded shadow border-0">
                        <div class="card-body py-5">
                            <div class="icon">
                                <img src="images/icon/ai.svg" class="avatar avatar-small" alt="">
                            </div>

                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Expert Teachers</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when reader will be of a page looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="images/icon/ai.svg" class="full-img" height="300" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FEATURES END -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer">
                        <img src="images/logo-light.png" height="24" alt="">
                    </a>
                    <p class="mt-4">Start working with Adoolam that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                        <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                        <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                        <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                        <li><a href="page-work-modern.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                        <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                        <li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                        <li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Usefull Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                        <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                        <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                        <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                        <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Newsletter</h4>
                    <p class="mt-4">Sign up and receive the latest tips via email.</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="foot-subscribe form-group position-relative">
                                    <label>Write your email <span class="text-danger">*</span></label>
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary btn-block" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© {{date('Y')}} Adoolam <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank" class="text-reset"></a>.</p>
                    </div>
                </div><!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled text-sm-right mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{!! asset('adoo/js/jquery-3.5.1.min.js')!!}"></script>
    <script src="{!! asset('adoo/js/bootstrap.bundle.min.js')!!}"></script>
    <script src="{!! asset('adoo/js/jquery.easing.min.js')!!}"></script>
    <script src="{!! asset('adoo/js/scrollspy.min.js')!!}"></script>
    <!-- Magnific Popup -->
    <script src="{!! asset('adoo/js/jquery.magnific-popup.min.js')!!}"></script>
    <script src="{!! asset('adoo/js/magnific.init.js')!!}"></script>
    <!-- SLIDER -->
    <script src="{!! asset('adoo/js/owl.carousel.min.js')!!}"></script>
    <script src="{!! asset('adoo/js/owl.init.js')!!}"></script>
    <!--FLEX SLIDER-->
    <script src="{!! asset('adoo/js/jquery.flexslider-min.js')!!}"></script>
    <script src="{!! asset('adoo/js/flexslider.init.js')!!}"></script>
    <!-- Counter -->
    <script src="{!! asset('adoo/js/counter.init.js')!!}"></script>
    <!-- Icons -->
    <script src="{!! asset('adoo/js/feather.min.js')!!}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{!! asset('adoo/js/app.js')!!}"></script>
</body>
</html>
