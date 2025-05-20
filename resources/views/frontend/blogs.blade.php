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

     <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h4 class="text-primary">Our Blog</h4>
                    <h1 class="display-4 mb-4">Electricity News &amp; Updates</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/commercial-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Electrifying Reads Explore Our Electricity</a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-calendar me-2"></i> April 2,2025</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Electricity Corner</p>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis rem distinctio tempora eum quam eligendi. Repudiandae voluptas voluptatibus quo itaque!
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/commercial-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Empowering Energy Dive into Our Electricity </a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-calendar me-2"></i> April 2,2025</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Electricity Corner</p>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis rem distinctio tempora eum quam eligendi. Repudiandae voluptas voluptatibus quo itaque!
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/commercial-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Electricity Explained: Bloggin Power of Tomorrow</a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-calendar me-2"></i> April 2,2025</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Electricity Corner</p>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis rem distinctio tempora eum quam eligendi. Repudiandae voluptas voluptatibus quo itaque!
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
 @endsection
