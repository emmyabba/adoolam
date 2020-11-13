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
										Online Learn Courses Management Platformp
									</h2>
									<p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
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
									<p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
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
									<p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End feature section -->

		<!-- collection-section
			================================================== -->
		<section class="collection-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Categories</span>
						<h1>Trending Collection</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
				<div class="collection-box">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="collection-post">
								<div class="inner-collection">
									<img src="upload/collection/web-development.jpg" alt="">
									<a href="#" class="hover-post">
										<span class="title">Web Development</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="collection-post">
								<div class="inner-collection">
									<img src="upload/collection/web-design.jpg" alt="">
									<a href="#" class="hover-post">
										<span class="title">Web Design</span>
										<span class="numb-courses">2 Courses</span>
									</a>
								</div>
							</div>
							<div class="collection-post">
								<div class="inner-collection">
									<img src="upload/collection/technology.jpg" alt="">
									<a href="#" class="hover-post">
										<span class="title">Technology</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="collection-post">
								<div class="inner-collection">
									<img src="upload/collection/photography.jpg" alt="">
									<a href="#" class="hover-post">
										<span class="title">Photography</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
							<div class="collection-post">
								<div class="inner-collection">
									<img src="upload/collection/design.jpg" alt="">
									<a href="#" class="hover-post">
										<span class="title">Design</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End collection section -->

		<!-- countdown-section
			================================================== -->
		<section class="countdown-section">
			<div class="container">
				<div class="countdown-box">
					<h1>Limited Time: Get My Book For Free!</h1>
					<p>Learn anytime, anywhere. Best Courses. Top Instituion.</p>
					<div class="countdown-item" data-date="2019/12/14">
						<div class="countdown-col">
							<span class="countdown-unit countdown-days">
								<span class="number" id="days"></span>
								<span class="text">days</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-hours">
								<span class="number" id="hours"></span>
								<span class="text">hours</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-min">
								<span class="number" id="minutes"></span>
								<span class="text">minutes</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-sec">
								<span class="number" id="seconds"></span>
								<span class="text">seconds</span>
							</span>
						</div>
					</div>
					<p>We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings.</p>
					<a class="button-two" href="#">Get my free book</a>
				</div>
			</div>
		</section>
		<!-- End countdown section -->

		<!-- popular-courses-section
			================================================== -->
		<section class="popular-courses-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Education</span>
						<h1>Popular Courses</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
				<div class="popular-courses-box">
					<div class="row">

						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="single-course.html">
										<img src="upload/courses/1.jpg" alt="">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
											<a href="single-course.html">Introduction Web Design with HTML</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">5.00</span>
													<span class="votes-number">1 Votes</span>
												</span>
											</div>
											<a href="#" class="course-loop-teacher">Duha Samra</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											<i class="material-icons">group</i>
											<span>64</span>
										</div>
										<div class="course-price">
											<span>£244</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="single-course.html">
										<img src="upload/courses/2.jpg" alt="">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
											<a href="single-course.html">Special Education Needs Teaching</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">3.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
											</div>
											<a href="#" class="course-loop-teacher">Leon Redding</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											<i class="material-icons">group</i>
											<span>134</span>
										</div>
										<div class="course-price">
											<span>£74.99</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="single-course.html">
										<img src="upload/courses/3.jpg" alt="">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
											<a href="single-course.html">Environmental Science BTEC Course</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">No Votes</span>
												</span>
											</div>
											<a href="#" class="course-loop-teacher">Linda Castello</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											<i class="material-icons">group</i>
											<span>0</span>
										</div>
										<div class="course-price">
											<span>£18.99</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="single-course.html">
										<img src="upload/courses/4.jpg" alt="">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
											<a href="single-course.html">Distance Learning MBA Management</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">4.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
											</div>
											<a href="#" class="course-loop-teacher">Michael Arnett</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											<i class="material-icons">group</i>
											<span>263</span>
										</div>
										<div class="course-price">
											<span>£29.99</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End popular-courses section -->

		<!-- events-section
			================================================== -->
		<section class="events-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="title-section">
							<div class="left-part">
								<span>Events</span>
								<h1>Upcoming Events</h1>
							</div>
						</div>

						<div class="events-box">

							<div class="events-post">
								<div class="event-inner-content">
									<div class="top-part">
										<div class="date-holder">
											<div class="date">
												<span class="date-day">22</span>
												<span class="date-month">Oct</span>
											</div>
										</div>
										<div class="content">
											<div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
												<span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
											</div>
											<h2 class="title"><a href="#">Summer High School Journalism Camp Registration Form</a></h2>
										</div>
									</div>
								</div>
							</div>

							<div class="events-post">
								<div class="event-inner-content">
									<div class="top-part">
										<div class="date-holder">
											<div class="date">
												<span class="date-day">14</span>
												<span class="date-month">Dec</span>
											</div>
										</div>
										<div class="content">
											<div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 5:00 am
												</span>
												<span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
											</div>
											<h2 class="title"><a href="#">Board of Regents Campus Live and Community Forum</a></h2>
										</div>
									</div>
								</div>
							</div>

							<div class="events-post">
								<div class="event-inner-content">
									<div class="top-part">
										<div class="date-holder">
											<div class="date">
												<span class="date-day">17</span>
												<span class="date-month">Dec</span>
											</div>
										</div>
										<div class="content">
											<div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 8:00 am
												</span>
												<span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
											</div>
											<h2 class="title"><a href="#">May Professional Development Diversity and Inclusion Series</a></h2>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-6">
						<div class="title-section">
							<div class="left-part">
								<span>Watch Video</span>
								<h1>Learn Anywhere</h1>
							</div>
						</div>

						<div class="video-box">
							<div class="video-post">
								<img src="upload/video/video-poster-1.jpg" alt="">
								<div class="hover-post">
									<h2>Marketing, Media and Advertising</h2>
									<p>About Studioare</p>
								</div>
								<a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="video-post small-post">
										<img src="upload/video/video-poster-2.jpg" alt="">
										<div class="hover-post">
											<h2>Limitless learning</h2>
										</div>
										<a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="video-post small-post">
										<img src="upload/video/video-poster-3.jpg" alt="">
										<div class="hover-post">
											<h2>Learn by Doing</h2>
										</div>
										<a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End events section -->

		<!-- news-section
			================================================== -->
		<section class="news-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Blog</span>
						<h1>Latest News</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Posts</a>
					</div>
				</div>
				<div class="news-box">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-1.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Academics</a>
									<h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-2.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Government</a>
									<h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-3.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Design</a>
									<h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-4.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Business</a>
									<h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End news section -->

		<!-- testimonial-section
			================================================== -->
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-box owl-wrapper">

					<div class="owl-carousel" data-num="1">

						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-1.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-2.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-3.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-4.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End testimonial section -->
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
