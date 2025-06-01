 @extends('frontend.layouts.master')


 @section('content')
     {{--  Breadcrumbs  --}}
     <div class="breadcrumbs section overlay" data-stellar-background-ratio="-0.5">
         <div class="container">
             <div class="bread-inner">
                 <div class="row">
                     <div class="col-12">
                         <h2>CONTACT US</h2>
                         <ul class="bread-list">
                             <li><a href="/">Home</a></li>
                             <li><i class="icofont-simple-right"></i></li>
                             <li class="active">Contact Us</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{--  End Breadcrumbs  --}}

     {{--  Start Contact Us  --}}
     <section class="contact-us section">
         <div class="container">
             <div class="inner">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="contact-us-left">

                         </div>
                     </div>
                     div
                     <div class="col-lg-6">
                         <div class="contact-us-form">
                             <h2>Contact With Us</h2>
                             <p>If you have any questions please fell free to contact with us.</p>
                             <!-- Form -->

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
                                         <div class="checkbox">
                                             <label class="checkbox-inline" for="2"><input name="news"
                                                     id="2" type="checkbox">Do you want to subscribe our Newsletter
                                                 ?</label>
                                         </div>
                                     </div>
                                 </div>
                             </form>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="contact-info">
                 <div class="row">
                     <!-- single-info -->
                     <div class="col-lg-4 col-12 ">
                         <div class="single-info">
                             <i class="icofont icofont-ui-call"></i>
                             <div class="content">
                                 <h3>+(000) 1234 56789</h3>
                                 <p>info@company.com</p>
                             </div>
                         </div>
                     </div>
                     <!--/End single-info -->
                     <!-- single-info -->
                     <div class="col-lg-4 col-12 ">
                         <div class="single-info">
                             <i class="icofont-google-map"></i>
                             <div class="content">
                                 <h3>2 Fir e Brigade Road</h3>
                                 <p>Chittagonj, Lakshmipur</p>
                             </div>
                         </div>
                     </div>
                     <!--/End single-info -->
                     <!-- single-info -->
                     <div class="col-lg-4 col-12 ">
                         <div class="single-info">
                             <i class="icofont icofont-wall-clock"></i>
                             <div class="content">
                                 <h3>Mon - Sat: 8am - 5pm</h3>
                                 <p>Sunday Closed</p>
                             </div>
                         </div>
                     </div>
                     <!--/End single-info -->
                 </div>
             </div>
         </div>
     </section>
     <!--/ End Contact Us -->

     {{--  Start Google-map  --}}
     <div id="myMap">
         <iframe src="{{ asset($setting['site_google_map']) }}" width="600" height="600" style="border:0;"
             allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     {{--  /End Google-map  --}}
 @endsection
