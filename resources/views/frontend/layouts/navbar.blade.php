<!-- Header Area -->
<header class="header">
    <!-- Topbar -->
    {{--  <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->

                    <ul class="top-link">
                        <li><a href="https://www.facebook.com/senux.Adihetty">Created By Senuda Adihetty</a></li>
                    <!--	<li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li> -->
                    </ul>

                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+94 70 5851 814</li>
                        <li><i class="fa fa-envelope"></i>
                            <a href="senuadihetty29@gmail.com">
                            senuadihetty29@gmail.com</a></li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">

                            <h1> The GYM</h1>
                            <p>Fitness & Health</p>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">

                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="#"> Home
                                            <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Trainers </a></li>
                                    <li><a href="#">Services </a></li>
                                    <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            <!--/ End Navigation -->

                        </div>
                        <!--/ End Main Menu -->
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
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->
