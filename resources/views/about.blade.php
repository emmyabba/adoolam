@extends('layouts.welcome')

@section('content')
	<!-- page-banner-section
			================================================== -->
            {{-- <section class="page-banner-section">
                <div class="container">
                    <h1>About Us</h1>
                    <ul class="page-depth">
                        <li><a href="{{route('welcome')}}">Adoolam</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </section> --}}
            <!-- End page-banner-section -->

            <!-- about-section
                ================================================== -->
            <section class="about-section">
                <div class="container">
                    <div class="contact-box">
                        <h1 class="text-center text-black">About Adoolam Digital Platform</h1>
                        <p class="text-center" style="font-size: 18px;  padding-top: -25px;">We help transform your ideas/experiences into courses and courses to cash whether you’re tech savvy or not.</p>
                        <br>
                    </div>
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="article-content">
                                      <blockquote> <p>1 Samuel 22:1 David therefore departed thence, and escaped to the cave Adullam: and when his brethren and all his father's house heard it, they went down thither to him.</p><br><br><br></blockquote>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="article-content">
                                      <blockquote> <p>1 Samuel 22:2 And every one that was in distress, and every one that was in debt, and every one that was discontented, gathered themselves unto him; and he became a captain over them: and there were with him about four hundred men.</blockquote>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="article-content">
                                      <blockquote> <p>2 Samuel 23:8 These be the names of the mighty men whom David had: The Tachmonite that sat in the seat, chief among the captains; the same was Adino the Eznite: he lift up his spear against eight hundred, whom he slew at one time.</blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{!! asset('adool/vision.png')!!}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="article-content">
                                    <h2>Vision</h2>
                                    <p>The vision of this platform was inspired by the story of the biblical King David who fought 66 battles and lost none. He started out in a Cave where he was joined by few men with varying degrees of problems and challenges. These men stayed with David in the Cave, got trained and ended becoming mighty men. They all got transformed positively in the Cave Adullam and became giant beaters and world conquerors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center">ADOOLAM is not just like every other Online Training Platform but rather a TRANSFORMATIONAL DIGITAL TRAINING PLATFORM.</h3>
                    <p class="text-center"> The idea is for anyone who comes in to become transformed positively and become the very best version of themselves.<br>
                        If a man indebt comes on our platform for instance, he should be able to undergo a course that will not just get him out of debt but keep him out of debt as well.</p>
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="article-content left-align">
                                    <h2>Goals</h2>
                                   <ol>
                                    <li>Help instructors, course and content creators transform their experiences into a thriving knowledge business</li>
                                    <li>Impact practical knowledge</li>
                                    <li>Have access to the resources you need to create and sell online courses quickly tech savvy
                                    or not</li>
                                    <li>Make developing and deploying online courses seamless and effortless</li>
                                    <li>Teach DIY (Do It Yourself) version of your trade and professions</li>
                                    <li>Convert your skill and proficiency into a goldmine of overflowing income</li>
                                    <li>A knowledge sharing school for the now and future</li>
                                    <li>Help people with wealth of experience acquired over time document it for others to learn</li>
                                    <li>Act as a source of secondary/residual income generating medium for busy executives</li>
                                    <li>Help people create a business that makes them smile</li>
                                   </ol>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="article-content">
                                    <h2>Target Audience</h2>
                                    <ol>
                                    <li>Content creators of all ages</li>
                                    <li>Public speakers  </li>
                                        <li>School teachers </li>
                                        <li>Executives/business men who want additional source of income that will not affect their 9-5 jobs</li>
                                          <li>People with insatiable quest for knowledge</li>
                                          <li>People who needs practical knowledge in handling the challenges of life</li>
                                         <li>Students of different institutions who needs a DIY system</li>
                                          <li>Anyone who want to invest in the knowledge economy</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="article-content">
                                    <h2>Age Range</h2>
                                <img src="{!! asset('adool/age-range.png')!!}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="article-content">
                                    <h2>Value Proposition</h2>
                                   <ol>
                                   <li>We help transform your ideas into courses and courses to cash whether you’re tech
                                    savvy or not</li>
                                    <li>Personalize your digital learning journey</li>
                                    <li>Create interesting multimedia lectures, enlightening videos and transforming life coaching
                                    sessions with the help of our easy-to-use tools</li>
                                    <li>Get detailed information of your sales and student insights with our all-inclusive dashboard</li>
                                    <li>You can invite team members authors, contributors and personalize their licenses and
                                    functions; we collaborate with them and pay them for you.</li>
                                    <li>We are obsessed with the responsibility of making the software user friendly and that your
                                    courses look attractive</li>
                                   </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End about section -->

            <!-- statistic-section
                ================================================== -->
            <section class="statistic-section">
                <div class="container">
                    <div class="statistic-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="statistic-post">
                                    <span class="timer" data-from="0" data-to="100"></span>
                                    <p>Learners <br> </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="statistic-post">
                                    <span class="timer" data-from="0" data-to="200"></span>
                                    <p>Instructors <br> </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="statistic-post">
                                    <span class="timer" data-from="0" data-to="135"></span>
                                    <p>Courses <br> </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="statistic-post">
                                    <span class="timer" data-from="0" data-to="28"></span>
                                    <p>Books <br> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End statistic section -->


	<!-- contact-info-section
			================================================== -->
            <section class="contact-info-section">
                <div class="container">
                        <h1>Contact Us</h1>
                    <div class="contact-info-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="info-post">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            Tel: 0000 000 0000<br>
                                            E-Mail: <a href="#">hello@adoolam.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="info-post">
                                    <div class="icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            Minna <br>
                                            Nigeria
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="info-post">
                                    <div class="icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            Support is available:<br>
                                            Mon to Fri from 8am to 6pm
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact-info section -->
@endsection

@section('scripts')
<style>
    blockquote {
  background:#f9f9f9;
  border-left:10px solid #f34081;
  margin:1.5em 10px;
  padding:.5em 10px;
  quotes:"\201C""\201D""\2018""\2019";
}
blockquote:before {
  color:#ccc;
  content:open-quote;
  font-size:4em;
  line-height:.1em;
  margin-right:.25em;
  vertical-align:-.4em;
}
blockquote p {
  display:inline;
}
</style>

@endsection
