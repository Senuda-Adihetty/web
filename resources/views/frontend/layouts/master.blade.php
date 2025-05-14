<!doctype html>
<html class="no-js" lang="zxx">

<head>
    {{--  Meta Tags  --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--  Title  --}}
    <title>The Gym Soft Web</title>
{{--    --}}
    {{--  Favicon  --}}
    <link rel="icon" href="{{ asset('frontend/1/img/favicon.png') }}">

    {{--  Google Fonts  --}}
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    {{--  Bootstrap CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/bootstrap.min.css') }}">

    {{--  Nice Select CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/nice-select.css') }}">

    {{--  Font Awesome CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/font-awesome.min.css') }}">

    {{--  icofont CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/icofont.css') }}">

    {{--  Slicknav   --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/slicknav.min.css') }}">

    {{--  Owl Carousel CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/owl-carousel.css') }}">

    {{--  Datepicker CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/datepicker.css') }}">

    {{--  Animate CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/animate.min.css') }}">

    {{--  Magnific Popup CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/magnific-popup.css') }}">

    {{--  Medipro CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/1/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/1/css/responsive.css') }}">

</head>

<body>


    
    {{--  Preloader  --}}
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    {{--  End Preloader  --}}

    {{--  Get Pro Button  --}}
    <ul class="pro-features">
        <a class="get-pro" style="background: #ff0000;" href="#">Click</a>
        <div class="button">
            <a href="{{ url('login') }}" target="_blank" class="btn">Login</a>
            <a href="{{ url('register') }}" target="_blank" class="btn">Register</a>
        </div>
    </ul>
    {{-- End Get Pro Button  --}}

    {{--  NavBar Section  --}}
    @include('frontend.layouts.navbar')
    {{--  End NavBar Section  --}}

    {{--  Middle Content Area  --}}
    <div>
        @yield('content')
    </div>
    {{--  End Middle Content Area  --}}

    {{--  Footer Area  --}}
    @include('frontend.layouts.footer')
    {{--  End Footer Area  --}}




    {{--  jquery Min JS  --}}
    <script src="{{ asset('frontend/1/js/jquery.min.js') }}"></script>

    {{--  jquery Migrate JS  --}}
    <script src="{{ asset('frontend/1/js/jquery-migrate-3.0.0.js') }}"></script>

    {{--  jquery Ui JS  --}}
    <script src="{{ asset('frontend/1/js/jquery-ui.min.js') }}"></script>

    {{--  Easing JS  --}}
    <script src="{{ asset('frontend/1/js/easing.js') }}"></script>

    {{--  Color JS  --}}
    <script src="{{ asset('frontend/1/js/colors.js') }}"></script>

    {{--  Popper JS  --}}
    <script src="{{ asset('frontend/1/js/popper.min.js') }}"></script>

    {{--  Bootstrap Datepicker JS  --}}
    <script src="{{ asset('frontend/1/js/bootstrap-datepicker.js') }}"></script>

    {{--  Jquery Nav JS  --}}
    <script src="{{ asset('frontend/1/js/jquery.nav.js') }}"></script>

    {{--  Slicknav JS  --}}
    <script src="{{ asset('frontend/1/js/slicknav.min.js') }}"></script>

    {{--  ScrollUp JS  --}}
    <script src="{{ asset('frontend/1/js/jquery.scrollUp.min.js') }}"></script>

    {{--  Niceselect JS  --}}
    <script src="{{ asset('frontend/1/js/niceselect.js') }}"></script>

    {{--  Tilt Jquery JS  --}}
    <script src="{{ asset('frontend/1/js/tilt.jquery.min.js') }}"></script>

    {{--  Owl Carousel JS  --}}
    <script src="{{ asset('frontend/1/js/owl-carousel.js') }}"></script>

    {{--  counterup JS  --}}
    <script src="{{ asset('frontend/1/js/jquery.counterup.min.js') }}"></script>

    {{--  Steller JS  --}}
    <script src="{{ asset('frontend/1/js/steller.js') }}"></script>

    {{--  Wow JS  --}}
    <script src="{{ asset('frontend/1/js/wow.min.js') }}"></script>

    {{--  Magnific Popup JS  --}}
    <script src="{{ asset('frontend/1/js/jquery.magnific-popup.min.js') }}"></script>

    {{--  Counter Up CDN JS  --}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    {{--  Bootstrap JS  --}}
    <script src="{{ asset('frontend/1/js/bootstrap.min.js') }}"></script>

    {{--  Main JS  --}}
    <script src="{{ asset('frontend/1/js/main.js') }}"></script>

</body>

</html>
