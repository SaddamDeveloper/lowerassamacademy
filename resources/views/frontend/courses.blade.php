@extends('master')
@section('content')
<div class="main-content">

      
    <!-- Mobile Menu Area End -->

<!-- Inner Page Banner Area Start Here -->
 <div class="inner-page-banner-area">
     <div class="container">
         <div class="pagination-area">
             <h1 style="text-align: center;">Courses</h1>
           
         </div>
     </div>
 </div>
 <div class="about-page2-area">
     <div class="container">
         <div class="row about-page2-inner">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="about-page-img-holder ">

                   <h2 style="color: #b62f08;font-weight: 600;font-family: serif;">Lower Assam Academy</h2>
                   <h3 style="font-family: Times New Roman">(A) <i>Subject for HSSLC: 10:00 A.M to 3.00 P.M.</i></h3>
                   <ul>
                     <li>  <p>Physics, Chemistry, Mathematics, Biology, MIL(Assamese), English, Anthropology, Computer</p></li>
                   </ul>
               </div>
           </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                 <img src="{{asset('frontend/allPhotos/photos/course.jpg')}}" alt="" style="width: 400px">
             </div>
         </div>
     </div>
 </div>
 <!-- About Page 2 Area End Here -->
 <!-- Why Choose Area Start Here -->
 <div class="about2-area">
     <div class="container">
         <h1 class="about-title">Welcome To Lower Assam Academy</h1>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.1s; animation-name: none;">
                 <div class="service-box2">
                     <div class="service-box-icon">
                         <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                     </div>
                     <h3><a href="#">Laboratory &amp; Computers</a></h3>
                 </div>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                 <div class="service-box2">
                     <div class="service-box-icon">
                         <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                     </div>
                     <h3><a href="#">Skilled Teachers</a></h3>
                 </div>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.7s; animation-name: none;">
                 <div class="service-box2">
                     <div class="service-box-icon">
                         <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                     </div>
                     <h3><a href="#">Book Library &amp; Store</a></h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: none;">
                 <h2 class="about-counter title-bar-counter" data-num="36">36</h2>
                 <p>FACULTY MEMBERS</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: none;">
                 <h2 class="about-counter title-bar-counter" data-num="21">21</h2>
                 <p>YEARS OF ESTABLISHMENT</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: none;">
                 <h2 class="about-counter title-bar-counter" data-num="47">47</h2>
                 <p>CLASS ROOM</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.8s; animation-name: none;">
                 <h2 class="about-counter title-bar-counter" data-num="432">432</h2>
                 <p>TOTAL STUDENTS</p>
             </div>
         </div>
     </div>
 </div>
</div>
@endsection
