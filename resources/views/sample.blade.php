{{--  bootstrap pop-pup massege  --}}
{{--  bootstrap js cdn link need  --}}
{{-- Toast for Success Message --}}
@if (session()->has('success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
{{-- End Toast for Success Message --}}
{{-- Toast for Error Message --}}
@if (session()->has('error'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
{{-- End Toast for Error Message --}}
{{-- end bootstrap pop-pup massege  --}}





{{--  Normal Bootstrap Alert  --}}
{{-- Begin Success Massege  --}}
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- End Success Massege  --}}
{{-- Begin Error Massege  --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- End Error Massege  --}}
{{-- End Normal Bootstrap Alert  --}}



{{-- Start Pop-pup Error Massege with JS --}}
@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let errorMessages = `{!! implode('<br>', $errors->all()) !!}`;
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: errorMessages,
            });
        });
    </script>
@endif

@if (session()->has('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        });
    </script>
@endif


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- End Pop-pup Error Massege with JS --}}


{{--  Ligt mod Dark mod toggle Button  --}}
<div class="form-check form-switch p-2">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked
        onclick="myFunction()">
</div>
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

    // Toggle theme
    function myFunction() {
        var element = document.body;
        element.dataset.bsTheme =
            element.dataset.bsTheme === "light" ? "dark" : "light";

        // Optional: save preference to localStorage
        // localStorage.setItem("theme", element.dataset.bsTheme);
    }
</script>
{{-- End  Ligt mod Dark mod toggle Button  --}}


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#slide').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 25, 50, 100],
                    [5, 10, 25, 50, 100]
                ]
            });
        });
    </script>
@endpush


{{--  email yawanna env file eke mail port haduwata passe,
    windows power shell eke me commond eka run karanna  --}}
Test-NetConnection smtp.gmail.com -Port 587
{{--  Test-NetConnection smtp.gmail.com -Port 587 ක්‍රමය ඔබේ පරිගණකය Gmail SMTP server එකට සම්බන්ධ විය හැකිද කියලා පරීක්ෂා කරන නිරදානම කමාන්ඩ් එකක් විතරයි. ඔබේ පරිගණකයට කිසිම හානියක් වෙන්නේ නැහැ.  --}}






{{--  swipe to slide start --}}
<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>

                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=503"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>

                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1564979268369-42032c5ca998?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>

                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1576659531892-0f4991fca82b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>

                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1586083702768-190ae093d34d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=305&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=505"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>

                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506"
                            alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                            quae tempora......</p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
{{--  swipe to slide end --}}
