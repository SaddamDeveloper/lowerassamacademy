<!DOCTYPE html>
<html>
  
<!-- Mirrored from rajdhanipublicschool.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 08:20:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title></title>

    <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Rajdhani Public School | Design by Web Infotech</title>
       <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- Favicon -->
       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
       <!-- Normalize CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
       <!-- Main CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
       <!-- Animate CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
       <!-- Font-awesome CSS-->
       <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
       <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
       <!-- Owl Caousel CSS -->
       <link rel="stylesheet" href="{{asset('frontend/vendor/OwlCarousel/owl.carousel.min.css')}}">
       <link rel="stylesheet" href="{{asset('frontend/vendor/OwlCarousel/owl.theme.default.min.css')}}">
       <!-- Main Menu CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
       <!-- nivo slider CSS -->
       <link rel="stylesheet" href="{{asset('frontend/vendor/slider/css/nivo-slider.css')}}" type="text/css" />
       <link rel="stylesheet" href="{{asset('frontend/vendor/slider/css/preview.css')}}" type="text/css" media="screen" />
       <!-- Datetime Picker Style CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/jquery.datetimepicker.css')}}">
       <!-- Magic popup CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
       <!-- Switch Style CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/hover-min.css')}}">
       <!-- ReImageGrid CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/reImageGrid.css')}}">
       <!-- Custom CSS -->
       <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
       <!--responsive css-->
       <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
       <!-- Modernizr Js -->
       <script src="{{asset('frontend/js/modernizr-2.8.3.min.js')}}"></script>

  </head>


  <body>
    {{-- <div id="preloader"></div>  --}}
    <!-- Header Area Start Here -->
    @include('frontend.include.header')
       
    <!-- Header Area End Here -->
    @yield('content')

    <!-- Footer Area Start Here -->
    @include('frontend.include.footer')
    <!-- Footer Area End Here -->

  </body>
  <script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <!-- Plugins js -->
  <script src="{{asset('frontend/js/plugins.js')}}" type="text/javascript"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- WOW JS -->
  <script src="{{asset('frontend/js/wow.min.js')}}"></script>
  <!-- Nivo slider js -->
  <script src="{{asset('frontend/vendor/slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('frontend/vendor/slider/home.js')}}" type="text/javascript"></script>
  <!-- Owl Cauosel JS -->
  <script src="{{asset('frontend/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
  <!-- Meanmenu Js -->
  <script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
  <!-- Srollup js -->
  <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
  <!-- jquery.counterup js -->
  <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
  <!-- Countdown js -->
  <script src="{{asset('frontend/js/jquery.countdown.min.js')}}" type="text/javascript"></script>
  <!-- Isotope js -->
  <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
  <!-- Magic Popup js -->
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
  <!-- Gridrotator js -->
  <script src="{{asset('frontend/js/jquery.gridrotator.js')}}" type="text/javascript"></script>
  <!-- Custom Js -->
  <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
  <script src="{{asset('frontend/js/share.js')}}"></script>
  @yield('script')
</html>
