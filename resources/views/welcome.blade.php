@extends('layouts.welcome')

@section('content')
 @include('layouts.sliders')

<!-- feature-section
			================================================== -->
		<section class="feature-section">
			<div class="container">
				<div class="feature-box">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="feature-content">
									<h2>
										Free and Paid courses Platform
									</h2>
									{{-- <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder color2">
									<i class="fa fa-id-card-o"></i>
								</div>
								<div class="feature-content">
									<h2>
										Learn from the masters of the field online
									</h2>
									{{-- <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder color3">
									<i class="fa fa-handshake-o"></i>
								</div>
								<div class="feature-content">
									<h2>
										An Introduction-Skills For Learners
									</h2>
									{{-- <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End feature section -->

		<!-- popular-courses-section
			================================================== -->
		<section class="popular-courses-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span></span>
						<h1>Available Courses</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
				<div class="popular-courses-box">
					<div class="row">
                        @foreach($courses as $row)
						<div class="col-lg-4 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="single-course.html">
										<img src="{{asset('/storage/course-image/'.$row->course_avatar)}}" alt="" height="802">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h3 class="course-title">
											<a href="#">{{$row->course_title}}</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												{{-- <span style="width:100%">
													<span class="rating">5.00</span>
													<span class="votes-number">1 Votes</span>
												</span> --}}
											</div>
											<a href="#" class="course-loop-teacher">Emma Abba</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											<i class="material-icons">group</i>
											<span>0</span>
										</div>
										<div class="course-price">
											<span>&#8358 {{number_format($row->course_price)}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endforeach

					</div>
				</div>
			</div>
		</section>
		<!-- End popular-courses section -->

@endsection

@section('scripts')
<script>
    var tpj=jQuery;
    var revapi202;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_202_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_202_1");
        } else {
            revapi202 = tpj("#rev_slider_202_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "adool/js/",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        enable: true,
                        style: 'gyges',
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: -60
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: -60
                        }
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {

                        enable: false,
                        style: 'persephone',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 55,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                     }
                },
                responsiveLevels: [1210, 1024, 778, 480],
                visibilityLevels: [1210, 1024, 778, 480],
                gridwidth: [1210, 1024, 778, 480],
                gridheight: [700, 700, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
@endsection
