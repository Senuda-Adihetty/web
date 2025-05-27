 @extends('frontend.layouts.master')


 @section('content')
     {{--  Breadcrumbs  --}}
     <div class="breadcrumbs section overlay" data-stellar-background-ratio="-0.5">
         <div class="container">
             <div class="bread-inner">
                 <div class="row">
                     <div class="col-12">
                         <h2>Our Trainers</h2>
                         <ul class="bread-list">
                             <li><a href="/">Home</a></li>
                             <li><i class="icofont-simple-right"></i></li>
                             <li class="active">Trainers</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{--  End Breadcrumbs  --}}

     <!-- Single News -->
     <section class="news-single section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-12">
                     <div class="row">
                         <div class="col-12">
                             <div class="single-main">
                                 <!-- News Head -->
                                 <div class="news-head">
                                     <img src="{{ asset('storage/' . $blog->image) }}" alt="#">
                                 </div>
                                 <!-- News Title -->
                                 <h1 class="news-title"><a href="news-single.html"> {{ $blog->title }}</a></h1>

                                 <span class="date"><i class="fa fa-clock-o"></i>
                                     {{ $blog->created_at->format('F j, Y') }}
                                    </span>

                                    <br>
                                    <br>
                                 <!-- News Text -->
                                 <div class="news-text text-justify" style="word-wrap: break-word; white-space: pre-line;">
                                     <p >{{ $blog->body }}</p>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </section>
     <!--/ End Single News -->
 @endsection
