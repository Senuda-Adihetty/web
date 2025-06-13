 @extends('frontend.layouts.master')


 @section('content')
     {{--  Breadcrumbs  --}}
     <div class="breadcrumbs section overlay" data-stellar-background-ratio="-0.5">
         <div class="container">
             <div class="bread-inner">
                 <div class="row">
                     <div class="col-12">
                         <h2>Why Choose Us</h2>
                         <ul class="bread-list">
                             <li><a href="/">Home</a></li>
                             <li><i class="icofont-simple-right"></i></li>
                             <li class="active">About</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{--  End Breadcrumbs  --}}

     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="section_title text-center mb-73 wow fadeInUp">
                     <br>
                     <h3>Meet Our Amazing Team</h3>

                     <p> All our trainers are qualified instructors with a passion for fitness</p>
                 </div>
             </div>
         </div>
         <br>

         <div class="row">

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                 <div class="single_team" style="border-radius: 30px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);">
                     <div class="team_thumb">
                         <img src="{{ asset('frontend/1/img/team-1.jpg') }}" alt="">
                         <div class="team_hover">
                             <div class="hover_inner text-center">
                                 <ul>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <br>
                     <div class="team_title text-center">
                         <h3>Jessica Mino</h3>
                         <p>Woman Trainer</p>
                         <br>
                         <p style="padding-left: 4px; padding-right: 4px;">All our trainers are qualified instructors with a
                             passion for fitness</P>
                         <br>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                 <div class="single_team" style="border-radius: 30px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);">
                     <div class="team_thumb">
                         <img src="{{ asset('frontend/1/img/team-1.jpg') }}" alt="">
                         <div class="team_hover">
                             <div class="hover_inner text-center">
                                 <ul>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <br>
                     <div class="team_title text-center">
                         <h3>Jessica Mino</h3>
                         <p>Woman Trainer</p>
                         <br>
                         <p style="padding-left: 4px; padding-right: 4px;">All our trainers are qualified instructors with a
                             passion for fitness</P>
                         <br>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                 <div class="single_team" style="border-radius: 30px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);">
                     <div class="team_thumb">
                         <img src="{{ asset('frontend/1/img/team-1.jpg') }}" alt="">
                         <div class="team_hover">
                             <div class="hover_inner text-center">
                                 <ul>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                     <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <br>
                     <div class="team_title text-center">
                         <h3>Jessica Mino</h3>
                         <p>Woman Trainer</p>
                         <br>
                         <p style="padding-left: 4px; padding-right: 4px;">All our trainers are qualified instructors with a
                             passion for fitness</P>
                         <br>
                     </div>
                 </div>
             </div>



         </div>
     </div>

      <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Provide You The Best Treatment In Resonable Price</h2>
                        <img src="{{ 'frontend/1/img/section-img.png' }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">


                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-tooth"></i>
                            </div>
                            <h4 class="title">Teeth Whitening</h4>
                            <div class="price">
                                <p class="amount">$299<span>/ Per Visit</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                            <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                            <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->

                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-heart-beat"></i>
                            </div>
                            <h4 class="title">Heart Suggery</h4>
                            <div class="price">
                                <p class="amount">$399<span>/ Per Visit</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                            <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                            <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                            <li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
                            <li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->

                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-heart-beat"></i>
                            </div>
                            <h4 class="title">Heart Suggery</h4>
                            <div class="price">
                                <p class="amount">$399<span>/ Per Visit</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                            <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                            <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                            <li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
                            <li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->

            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

 @endsection
