<header>
  <div id="header2" class="header2-area">
      <div class="header-top-area">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="header-top-left">
                          <ul>
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+91-700206547">+91-700206547 </a></li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:academykayakuchi@gmail.com">academykayakuchi@gmail.com</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="header-top-right">
                          <ul>
                              <li>
                                <a class="login-btn-area" href="{{route('student.login')}}"><i class="fa fa-download"></i>Admission Here</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="main-menu-area bg-textPrimary" id="sticker">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-5">
                      <div class="">
                          <a href="{{route('web.index')}}"><img  id="logoidk" src="{{asset('frontend/img/logo.png')}}" alt="logo"></a>
                      </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                      <nav id="desktop-nav">
                          <ul>
                            @if(Auth::check())
                            <li>
                                <a href="{{route('student.dashboard')}}" class="pull-right">Dashboard</a>
                            </li>
                            <li>
                                <a href="" class="pull-right">{{Auth::user()->name}}</a>
                            </li>
                            <li>
                                <a href="{{ route('student.logout') }}" class="fa fa-sign-out pull-right" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>     
                                <form id="frm-logout" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                              <li><a href="{{route('web.index')}}">Home</a></li>
                              <li><a href="">About Us</a>
                                  <ul>
                                      <li><a href="{{route('frontend.about')}}">Principal's Message</a></li>
                                      <li><a href="{{route('web.our_school')}}">Our School</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Academics</a>
                                  <ul>
                                      <li><a href="{{route('web.courses')}}">Courses</a></li>
                                      <li><a href="{{route('web.exams')}}">Exams</a></li>
                                      <li><a href="{{route('web.hostels')}}">Hostels</a></li>
                                      <li><a href="{{route('web.library')}}">Library & Lab</a></li>
                                      <li><a href="{{route('web.committee')}}">Academic Committee</a></li>
                                  </ul>
                              </li>

                              <li><a href="#">Admission</a>
                                  <ul>
                                      <li><a href="{{route('web.admission_proc')}}">Admission Procedure</a></li>
                                      <li><a href="{{route('web.reg_admission')}}">Academic Discipline</a></li>
                                  </ul>
                              </li>

                              </li>
                              <li><a href="{{route('web.gallery')}}">Gallery</a>

                              </li>
                              <li><a href="{{route('web.contact')}}">Contact</a> </li>
                              @endif
                            </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Mobile Menu Area Start -->
  <div class="mobile-menu-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="mobile-menu">
                        <nav id="dropdown">
                          <ul>
                            <li><a href="{{route('web.index')}}">Home</a></li>
                            <li><a href="#">About Us</a>
                                <ul>
                                    <li><a href="{{route('frontend.about')}}">Principal's Message</a></li>
                                    <li><a href="{{route('web.our_school')}}">Our School</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Academics</a>
                                <ul>
                                    <li><a href="{{route('web.courses')}}">Courses</a></li>
                                    <li><a href="{{route('web.exams')}}">Exams</a></li>
                                </ul>
                              </li>
                              <li><a href="#">Admission</a>
                                  <ul>
                                      <li><a href="{{route('web.admission_proc')}}">Admission Procedure</a></li>
                                      <li><a href="{{route('web.reg_admission')}}">Registration Cum Admission</a></li>
                                  </ul>
                              </li>
                              </li>
                              <li><a href="{{route('web.gallery')}}">Gallery</a>
                              </li>
                              <li><a href="{{route('web.contact')}}">Contact</a>
                              </li>
                            <li>
                                <a class="login-btn-area" href="{{route('student.login')}}"><i class="fa fa-download"></i>Admission Here</a>
                              </li>
                            </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Mobile Menu Area End -->
</header>