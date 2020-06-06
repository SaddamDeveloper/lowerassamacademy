@extends('master')
@section('content')
<div class="main-content">

  <!-- Mobile Menu Area End -->
<div class="inner-page-banner-area">
         <div class="container">
             <div class="pagination-area">
                 <h1 style="text-align: center;">Contact Us </h1>
             </div>
         </div>
     </div>
     <!-- Inner Page Banner Area End Here -->
     <!-- Contact Us Page 1 Area Start Here -->
     <div class="contact-us-page1-area">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                     <div class="contact-us-info1">
                         <ul>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <h3>Phone</h3>
                                 <p>(+91)-700206547</p>
                             </li>
                             <li>
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <h3>Address</h3>
                                 <p>Kayakuchi, Barpeta (Assam) - 781352<br kamrup,="" assam<="" p="">
                             </p></li>
                             <li>
                                 <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                 <h3>E-mail</h3>
                                 <p>lowerassamacademy@gmail.com</p>
                             </li>
                             <li>
                                 <h3>Follow Us</h3>
                                 <ul class="contact-social">
                                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                     <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                       <div class="contact-form1">
                         <fieldset>
                           <form method="POST" action="http://rajdhanipublicschool.in/contact" accept-charset="UTF-8" class="form-horizontal" id="contact-form"><input name="_token" type="hidden" value="p1cEPSwLR1bbvE9Bmd9px37c1AiIYy8o51fKjtrk">
                                <div class="contact-form2">
                                        <fieldset>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="number" placeholder="phone" class="form-control" name="phone" data-error="" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="subject" placeholder="subject" class="form-control" name="subject" data-error="" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required=""></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                                <div class="form-group margin-bottom-none">
                                                    <button type="submit" value="submit" class="default-big-btn" style="margin-bottom: 20px;">Send Message</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                                <div class="form-response"></div>
                                            </div>
                                        </fieldset>
                                      </div>
                                  </form>
                            </fieldset>
                        </div>
             </div>
         </div>
         <div class="container-fluid">
             <div class="row" style="margin-bottom: 30px;">
              <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=lower%20assam%20academy&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
             </div>
         </div>
     </div>
     </div>
     <!-- Contact Us Page 1 Area End Here -->








 </div>
@endsection
