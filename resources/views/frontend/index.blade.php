@extends('master')
@section('content')
    <!--================ End Header Menu Area =================-->

  <div class="main-content">
    <div class="slider1-area"> <!--for dark bg use this class= overlay-default -->
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
            <img src="{{asset('frontend/sliders/1.jpeg')}}" alt="slider" title="#slider-direction-1"  />
                <img src="{{asset('frontend/sliders/2.jpg')}}" alt="slider" title="#slider-direction-2"  />
                {{-- <img src="img/slider/2.png" alt="slider" title="#slider-direction-3"   /> --}}
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="title-container s-tb-c">
                        <div class="title1"><span class="paniya">Welcome To Lower Assam Academy</span></div>
                        <p style="text-align: center; font-size: 20px;"><span class="paniya">An ideal junior college of science & arts
                            <br>Kayakuchi, Barpeta(Assam)-781352</span></p>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="title-container s-tb-c">
                        <div class="title1"><span class="paniya">Our Laboratory</span></div>
                    </div>
                </div>
            </div>
            {{-- <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="title-container s-tb-c">
                        <div class="title1"><span class="paniya">Our Laboratory</span></div>
                        <!-- <p>Affiliated to CBSE, Delhi
                            <br>Class: Nursery to XII (Science, Arts, & Commerce) </p> -->
   
                        <div class="slider-btn-area">
                            <!-- <a href="{{url('/contact')}}" class="default-big-btn">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div> --}}
                
        </div>
    </div>
    <div class="about2-area">
        <div class="container">
            <h1 class="about-title">LOWER ASSAM ACADEMY PROVIDES</h1>
            <p class="about-sub-title" style="font-size: 30px;">QUALITY EDUCATION IS OUR MOTTO</p>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Laboratory</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Skilled Teachers</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Book Library & Store</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About 2 Area End Here -->
    <!-- Featured Area Start Here -->
    <div class="featured-area bg-common-style" style="background-image: url('{{asset('frontend/img/featured/back.jpg')}}');">
        <div class="container">
            <h2 class="title-default-textPrimary-left">Gallery</h2>
        </div>
        <div class="container" id="heading-change">
            <div class="row featured-wrapper" id="gallery-wrapper">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/img/lab2.jpg')}}" class="img-responsive" alt="featured">
                            <a href="{{asset('frontend/img/lab2.jpg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="featured-content-holder">
                            <h3 style="font-size: 26px;"><a href="#">Laboratory</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/img/lab1.jpg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                            <a href="{{asset('frontend/img/lab1.jpg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="featured-content-holder">
                            <h3><a href="#">Laboratory</a></h3>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/img/lab3.jpg')}}" class="img-responsive" alt="featured" style=" height: 200px;">
                            <a href="{{asset('frontend/img/lab3.jpg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="featured-content-holder">
                            <h3><a href="#">Classroom</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/img/campus.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                            <a href="{{asset('frontend/img/campus.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="featured-content-holder">
                            <h3><a href="#">College Campus</a></h3>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/img/students.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                            <a href="{{asset('frontend/img/students.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="featured-content-holder">
                            <h3><a href="#">Students with Professor</a></h3>
                            <!-- <p>Rmply dummy printing ypesetting industry it’s free demo.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-btn-area">
                <a href="{{route('web.gallery')}}" class="ghost-btn-big">View All</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- News and Event Area Start Here -->
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marqueenews">
        <h2>Latest News</h2>
            <marquee direction="up" scrolldelay="20" style="/*position:absolute;*/ animation: marquee 10s infinite; height: 300px;" loop="true" onmouseover="this.stop()" onmouseout="this.start()">
                <ul class="news-wrapper">
                @if(isset($notices) && !empty($notices))
                    @foreach($notices as $notice)
                        <a href="{{asset('admin/notices/'.$notice->notice)}}" target="_blank">
                            <div id="fullsized_image_holder" id="newsli">
                                <li id="newsli"><i class="fa fa-download"></i><b>{{$notice->title}}</b> &nbsp;&nbsp; 
                                    <small style="color: #ec0707;">Date:{{$notice->created_at}}
                                    </small> 
                                </li>
                            </div>
                        </a>
                    @endforeach
                @endif
                </ul>
            </marquee>
        </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                    <h2 class="title-default-left">Upcoming Events</h2>
                    <ul class="event-wrapper">
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3>5</h3>
                                    <p>januwary</p>
                                    <span>2012</span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="single-event.html">Meeting For School Programe</a></h3>
                                <p>This table lists the circumstances when normal dismissal times can be altered for students needs</p>
                                <ul>
                                    <li>4.00 pm - 6.00pm</li>
                                    <li>Guwahati.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3>8</h3>
                                    <p>March</p>
                                    <span>2103</span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="single-event.html">Meeting For School Programe</a></h3>
                                <p>This table lists the circumstances when normal dismissal times can be altered for students needs</p>
                                <ul>
                                    <li>3.00 pm - 5.00pm</li>
                                    <li>Delhi</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

<div class="counter-area bg-primary-deep" style="background-image: url('{{asset('frontend/img/banner/4.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="36">36</h2>
                        <p>FACULTY MEMBERS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="21">21</h2>
                        <p>YEARS OF ESTABLISHMENT</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="47">47</h2>
                        <p>CLASS ROOM</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="432">432</h2>
                        <p>TOTAL STUDENTS</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection