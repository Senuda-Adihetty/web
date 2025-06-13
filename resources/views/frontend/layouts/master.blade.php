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

    {{--  Favicon  --}}
    <link rel="icon" href="{{ asset('frontend/1/img/favicon.png') }}">

    {{--  Google Fonts  --}}
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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

    <style>
        .pagination {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: wrap;
            justify-content: center;
        }

        #news-slider {
            margin-top: 80px;
        }

        .post-slide {
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: -12px 15px 8px 15px;
            margin-left: -10px;
        }

        .post-slide .post-img img {
            width: 100%;
            height: auto;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .post-slide:hover .post-img img {
            transform: scale(1.1, 1.1);
        }

        .post-slide .over-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            background: linear-gradient(-45deg, rgba(6, 190, 244, 0.75) 0%, rgba(45, 112, 253, 0.6) 100%);
            transition: all 0.50s linear;
        }

        .post-slide:hover .over-layer {
            opacity: 1;
            text-decoration: none;
        }

        .post-slide .over-layer i {
            position: relative;
            top: 45%;
            text-align: center;
            display: block;
            color: #fff;
            font-size: 25px;
        }

        .post-slide .post-content {
            background: #fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }

        .post-slide .post-title a {
            font-size: 15px;
            font-weight: bold;
            color: #333;
            display: inline-block;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .post-slide .post-title a:hover {
            text-decoration: none;
            color: #3498db;
        }

        .post-slide .post-description {
            line-height: 24px;
            color: #808080;
            margin-bottom: 25px;
        }

        .post-slide .post-date {
            color: #a9a9a9;
            font-size: 14px;
        }

        .post-slide .post-date i {
            font-size: 20px;
            margin-right: 8px;
            color: #CFDACE;
        }

        .post-slide .read-more {
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #2196F3;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #1376c5;
            border-radius: 25px;
            text-transform: uppercase;
        }

        .post-slide .read-more:hover {
            background: #3498db;
            text-decoration: none;
            color: #fff;
        }

        .owl-nav {
            text-align: center;
            margin-top: 20px;
        }

        .owl-nav .owl-prev {
            background: #fff;
            position: absolute;
            top: -13%;
            left: 15px;
            padding: 0 18px 0 15px;
            border-radius: 50px;
            box-shadow: 3px 14px 25px -10px #92b4d0;

        }

        .owl-nav .owl-next {
            background: #fff;
            position: absolute;
            top: -13%;
            right: 15px;
            padding: 0 15px 0 18px;
            border-radius: 50px;
            box-shadow: -3px 14px 25px -10px #92b4d0;

        }

        .owl-controls .owl-buttons .owl-prev:after,
        .owl-controls .owl-buttons .owl-next:after {
            content: "\f104";
            font-family: FontAwesome;
            color: #333;
            font-size: 30px;
        }

        .owl-controls .owl-buttons .owl-next:after {
            content: "\f105";
        }

        @media only screen and (max-width:1280px) {
            .post-slide .post-content {
                padding: 0px 15px 25px 15px;
            }
        }

        .owl-nav .owl-prev:after,
        .owl-nav .owl-next:after {
            font-family: "FontAwesome";
            font-weight: 900;
            font-size: 30px;
            color: #333;
        }
    </style>

</head>

<body>

    {{--  Preloader  --}}
    {{--  <div class="preloader">
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
    </div>  --}}
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

    {{--  This is light and dark mode script  --}}
    <script>
        // Run when page loads
        window.onload = function() {
            var element = document.body;
            var toggle = document.getElementById("flexSwitchCheckChecked");

            // Default theme
            if (!element.dataset.bsTheme) {
                element.dataset.bsTheme = "light";
            }

            // Set toggle state based on current theme
            toggle.checked = element.dataset.bsTheme === "dark";
        }

        function toggleIcon(element) {
            const icon = element.querySelector('i');
            icon.classList.toggle('bi-moon-fill');
            icon.classList.toggle('bi-sun-fill');

            myFunction(); // Call your existing function here

        }
        // Toggle theme
        function myFunction() {
            var element = document.body;
            element.dataset.bsTheme =
                element.dataset.bsTheme === "light" ? "dark" : "light";

            // Optional: save preference to localStorage
            // localStorage.setItem("theme", element.dataset.bsTheme);
            console.log("myFunction called!");

        }
    </script>

    <script>
        $(document).ready(function() {
            $("#trainer-slider").owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

   <script>
    $(document).ready(function () {
        $("#package-slider").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

</body>

</html>
