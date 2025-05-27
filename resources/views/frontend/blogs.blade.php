 @extends('frontend.layouts.master')


 @section('content')
     {{--  Breadcrumbs  --}}
     <div class="breadcrumbs section overlay" data-stellar-background-ratio="-0.5">
         <div class="container">
             <div class="bread-inner">
                 <div class="row">
                     <div class="col-12">
                         <h2>Blogs</h2>
                         <ul class="bread-list">
                             <li><a href="/">Home</a></li>
                             <li><i class="icofont-simple-right"></i></li>
                             <li class="active">Blogs</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{--  End Breadcrumbs  --}}


     {{--  Start Blog Area   --}}
     <section class="blog section" id="blog">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-title">
                         <h2>Keep up with Our Most Recent Medical News.</h2>
                         <img src="{{ asset('frontend/1/img/section-img.png') }}" alt="#">
                         <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
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
                                     <div class="date">
                                         {{ $blog->created_at->format('F j, Y') }}
                                     </div>

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
                                     <a href="/blog/{{ $blog->slug }}">
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

<div class="d-flex justify-content-center">
    {{ $blogs->links('pagination::bootstrap-5') }}
</div>

         </div>
        </div>
     </section>


     {{--  End Blog Area  --}}
 @endsection
