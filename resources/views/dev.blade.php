
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ADOOLAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adoolam" />
    <meta name="keywords" content="Adoolam" />
    <meta name="author" content="Adoolam" />
    <meta name="email" content="" />
    <meta name="website" content="" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{!! ('adoo/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{!! ('adoo/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Main Css -->
    <link href="{!! ('adoo/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{!! ('adoo/css/colors/default.css') !!}" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader -->

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="/" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- COMING SOON PAGE -->
    <section class="bg-home d-flex align-items-center" data-jarallax='{"speed": 0.5}' style="background-image: url('adoo/images/comingsoon.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <a href="javascript:void(0)" class="logo h5">ADOOLAM</a>
                    <div class="text-uppercase title-dark text-white mt-2 mb-4 coming-soon">We're launching soon...</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div id="countdown"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                </div>
            </div>
        </div> <!-- end container -->
    </section><!--section end-->
    <!-- COMING SOON PAGE -->

    <!-- javascript -->
    <script src="{!! ('adoo/js/jquery-3.5.1.min.js') !!}"></script>
    <script src="{!! ('adoo/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! ('adoo/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! ('adoo/js/scrollspy.min.js') !!}"></script>
    <!-- Comingsoon -->
    <script src="{!! ('adoo/js/jquery.countdown.min.js') !!}"></script>
    <script src="{!! ('adoo/js/countdown.init.js') !!}"></script>
    <!-- Icons -->
    <script src="{!! ('adoo/js/feather.min.js') !!}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{!! ('adoo/js/app.js') !!}"></script>
</body>
</html>
