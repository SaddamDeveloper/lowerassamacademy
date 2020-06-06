@extends('master')
@section('content')
<div class="main-content">
       <div class="inner-page-banner-area">
          <div class="container">
              <div class="pagination-area" align="middle">
              </div>
          </div>
      </div>
      <div class="gallery-area2">
          <div class="container" id="inner-isotope">

          <div class="row featuredContainer gallery-wrapper" align="middle">
              @if(isset($gallery) && !empty($gallery))
                @foreach($gallery as $gal)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('admin/galleries/'.$gal->gallery)}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                            <a href="{{asset('admin/galleries/'.$gal->gallery)}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <h4>{{$gal->title}}</h4>
                        </div>
                       
                    </div>
                </div>
                @endforeach
                @endif
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
                    <div class="featured-box">
                        <div class="featured-img-holder hvr-bounce-to-right">
                            <img src="{{asset('frontend/Allphotos/photos/2.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                            <a href="{{asset('frontend/Allphotos/photos/2.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/3.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/3.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/4.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/4.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                   
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/5.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/5.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                   
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/6.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/6.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                   
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/7.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/7.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                  
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/8.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/8.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                  
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/9.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/9.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                   
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/10.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/10.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                   
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/11.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/11.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                </div>
                </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
               <div class="featured-box">
                    <div class="featured-img-holder hvr-bounce-to-right">
                        <img src="{{asset('frontend/Allphotos/photos/12.jpeg')}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                        <a href="{{asset('frontend/Allphotos/photos/12.jpeg')}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
                </div>
            </div> --}}
            </div>
          </div>
</div>
@endsection
