<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Lower Assam Academy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    @include('frontend.include.header')
    <!--================ End Header Menu Area =================-->
      @yield('content')
    <!--================ Start footer Area  =================-->
    @include('frontend.include.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.j')}}s"></script>
    <script src="{{asset('frontend/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/mail-script.js')}}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{asset('frontend/js/gmaps.min.js')}}"></script>
    <script src="{{asset('frontend/js/theme.js')}}"></script>
  </body>
</html>
