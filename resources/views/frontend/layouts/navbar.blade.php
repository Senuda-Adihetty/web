 {{--  Header Area  --}}
 <header class="header">
     {{--  Topbar  --}}

     <div class="topbar">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-5 col-12">
                     {{--  Contact  --}}
                     <ul class="top-link">
                         <li>
                             <a href="#">
                                 <i class="fas fa-map-marker-alt text-primary mr-2"></i>
                                 Find A Location
                             </a>
                         </li>

                     </ul>
                     {{--  End Contact  --}}
                 </div>
                 <div class="col-lg-6 col-md-7 col-12">
                     {{--  Top Contact  --}}
                     <ul class="top-contact">
                         <li>
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                             <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </li>
                            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                     </ul>
                     {{--  End Top Contact  --}}
                 </div>
             </div>
         </div>
     </div>

     {{--  End Topbar  --}}

     {{--  Header Inner  --}}
     <div class="header-inner">
         <div class="container">
             <div class="inner">
                 <div class="row">
                     <div class="col-lg-3 col-md-3 col-12">
                         <a href="/" class="d-flex align-items-center">
                             <div class="d-flex align-items-center mt-2">
                                 <img src="{{ asset('signIN/img/logo.png') }}" alt="The GYM Logo"
                                     class="img-fluid shadow mr-2" style="width: 50px; height: 65px;">
                                 <div>
                                     <h1 class="mb-0" style="font-size: 24px;">The GYM</h1>
                                     <p class="mb-0" style="font-size: 14px;">Fitness Center</p>
                                 </div>
                             </div>
                         </a>
                         {{--  Mobile Nav  --}}
                         <div class="mobile-nav" style="margin-top: -70px;"></div>
                         {{--  End Mobile Nav  --}}
                     </div>

                     <div class="col-lg-7 col-md-9 col-12">
                         {{--  Main Menu  --}}
                         <div class="main-menu">
                             <nav class="navigation">
                                 <ul class="nav menu">
                                     <li><a href="/"> Home </a></li>
                                     <li><a href="/trainers"> Trainers </a></li>
                                     <li><a href="/about"> About </a></li>
                                     <li><a href="/packages"> Packages </a></li>
                                     <li><a href="/blogs"> Blogs </a></li>
                                     <li><a href="/contact"> Contact Us </a></li>
                                 </ul>
                             </nav>
                             {{--  End Navigation  --}}
                         </div>
                         {{--  End Main Menu  --}}
                     </div>

                     <div class="col-lg-2 col-12">

                         <div class="get-quote">
                             @if (Auth::check())
                                 <!-- Check if the user is logged in -->
                                 <a href="{{ url('dashboard') }}" class="btn"
                                     style="border-radius: 50px; box-shadow: 0px 4px 12px rgba(0,0,0,0.1); overflow: hidden;">
                                     Dashboard
                                 </a>
                             @else
                                 <!-- If the user is not logged in -->
                                 <a href="{{ url('login') }}" class="btn"
                                     style="border-radius: 50px; box-shadow: 0px 4px 12px rgba(0,0,0,0.1); overflow: hidden;">
                                     Login
                                 </a>
                             @endif
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{--  End Header Inner   --}}
 </header>
 {{--  End Header Area  --}}
