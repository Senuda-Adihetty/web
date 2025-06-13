@extends('frontend.layouts.master')

@section('content')
    <!-- Slider Area -->
    <section class="slider">

        <div class="hero-slider">

            <!-- Start Single Slider -->
            @include('frontend.Home.slider')
            <!-- End Single Slider -->

        </div>

    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">

                    <div class="col-lg-8 col-md-6 col-12 ">

                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <span>Anousement Area</span>
                                    <!-- single-schedule -->
                                    @include('frontend.Home.anousment')
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <span>Fusce Porttitor</span>
                                    <h4>Trainers Timetable</h4>
                                    <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis
                                        sodales.</p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>  --}}

                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    <span>Donec luctus</span>
                                    <h4>Opening Hours</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                        <li class="day">Saturday <span>9.00-18.30</span></li>
                                        <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                    </ul>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>BENEFITS OF REGULAR EXERCISE</h2>
                        <img src="{{ 'homepage/img/section-img.png' }}" alt="#">
                        <p>Exercise is defined as any physical activity that makes your muscles work and requires your body
                            to burn calories. Maintaining an active lifestyle offers a multitude of health benefits,
                            positively impacting your physical and mental well-being. In fact, it has the potential to
                            extend your lifespan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-heart-beat"></i>
                        </div>
                        <h3>Improved Physical Health</h3>
                        <p>Regular exercise can lead to enhanced cardiovascular health, stronger muscles and bones, improved
                            flexibility, and increased endurance. It also reduces the risk of chronic diseases such as heart
                            disease, diabetes, and certain types of cancer.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-brain-alt"></i>
                        </div>
                        <h3>Enhanced Mental Health</h3>
                        <p>Exercise releases endorphins, often referred to as the 'feel-good' hormones, which can elevate
                            mood and reduce feelings of stress, anxiety, and depression. It can also improve sleep quality
                            and help manage conditions such as insomnia.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="icofont icofont-muscle-weight"></i>

                        </div>
                        <h3>Increased Energy Levels</h3>
                        <p>Regular physical activity improves blood circulation and oxygen delivery to the body, resulting
                            in increased energy levels and reduced fatigue.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay" data-stellar-background-ratio="0.5"
        style="background-image:url({{ asset('frontend/1/img/bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Gym Branches</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Trainers</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    {{--  <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{ asset('img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est
                            lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                    <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                    <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                    <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                    <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>  --}}
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5"
        style=" background-image:url({{ asset('frontend/1/img/bg.png') }})">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2> Gym in down south galle Hapugala </h2>
                        <br>
                        <div class="button">
                            <a href="" class="btn video-popup mfp-iframe">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    <section class="portfolio section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="trainer-slider" class="owl-carousel">

                        @foreach ($trainers as $trainer)
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $trainer->photo) }}" alt="">
                                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                </div>

                                <p> </p>
                                <div class="post-content" style="text-align: center;">
                                    <h3 class="post-title">
                                        <h3>{{ $trainer->fName }}</h3>
                                        <p>{{ $trainer->lName }}</p>
                                    </h3>

                                    <div style="display: flex; gap: 10px; justify-content: center;">
                                        <a href="mailto:{{ $trainer->email }}"><i
                                                class="fa fa-envelope text-primary"></i></a>
                                        <a href="{{ $trainer->fb }}"><i class="fa fa-facebook text-primary"></i></a>
                                        <a href="{{ $trainer->insta }}"><i class="fa fa-instagram text-primary"></i></a>
                                    </div>
                                    <p style="padding-left: 4px; padding-right: 4px;">
                                        ...........................................................</p>

                                    <p
                                        style="padding-left: 4px; padding-right: 4px; white-space: normal; word-break: break-word;">
                                        {{ $trainer->qulification }}
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--/ End portfolio -->

    <!-- Start service -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{ 'frontend/1/img/section-img.png' }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-prescription"></i>
                        <h4><a href="service-details.html">General Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-tooth"></i>
                        <h4><a href="service-details.html">Teeth Whitening</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-heart-alt"></i>
                        <h4><a href="service-details.html">Heart Surgery</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-listening"></i>
                        <h4><a href="service-details.html">Ear Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-eye-alt"></i>
                        <h4><a href="service-details.html">Vision Problems</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-blood"></i>
                        <h4><a href="service-details.html">Blood Transfusion</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End service -->

    {{-- Pricing Table --}}
    <section class="pricing-table section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="package-slider" class="owl-carousel">

                        @foreach ($packages as $package)
                            <div class="post-slide">
                                <!-- Single Table -->

                                <div class="single-table">
                                    <!-- Table Head -->
                                    <div class="table-head">
                                        <div class="icon">
                                            <img src="{{ asset('storage/' . $package->image) }}" alt="">
                                        </div>
                                        <h4 class="title"> {{ $package->name }}</h4>
                                        <div class="price">
                                            <p class="amount">$399<span>/ {{ $package->valid }}</span></p>
                                        </div>
                                    </div>
                                    <!-- Table List -->
                                    <ul class="table-list">
                                        @foreach ($package->details as $detail)
                                            <li>
                                                <i class="icofont icofont-ui-check"></i>
                                                {{ $detail }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="table-bottom">
                                        <a class="btn" href="#">{{ $package->price }}</a>
                                    </div>
                                    <!-- Table Bottom -->
                                </div>

                                <!-- End Single Table-->
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- / End Pricing Table --}}


    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Fitness News.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <span><i class="fa fa-clock-o"></i>
                                        {{ $blog->created_at->format('F j, Y') }}
                                    </span>

                                    <h2>
                                        <a href="blog-single.html">
                                            {{ $blog->title }}
                                        </a>
                                    </h2>

                                    <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {{ Str::limit($blog->body, 50) }}
                                    </p>
                                    <br>
                                    <div class="text-center">
                                        <a class="date" href="/blog/{{ $blog->slug }}">
                                            see More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                @endforeach
            </div>
            <br>
            <br>
            <div class="text-center">
                <a href="/blogs" class="text-primary">----- See All Blogs -----</a>
            </div>
        </div>
    </section>


    <!-- End Blog Area -->

    <!-- Start clients -->
    {{--  <div class="clients overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="owl-carousel clients-slider">
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client1.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client2.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client3.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client4.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client5.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client1.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client2.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client3.png') }}" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="{{ asset('frontend/1/img/client4.png') }}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!--/Ens clients -->

    <!-- Start Appointment -->
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                        <img src="{{ 'frontend/1/img/section-img.png' }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">


                    <div>
                        {{-- Begin Success Massege  --}}
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- End Error Massege  --}}
                    </div>

                    <form class="form" method="post" action="/contactSave">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="sender_name" id="sender_name" placeholder="Name"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="sender_email" id="sender_email" placeholder="Email"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="sender_phone" id="sender_phone" placeholder="Phone"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="sender_subject" id="sender_subject"
                                        placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="sender_message" id="sender_message" placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit">Send</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div id="myMap">
                        <iframe src="{{ asset($setting['site_google_map']) }}" width="600" height="600"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.
                        </p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->
@endsection
