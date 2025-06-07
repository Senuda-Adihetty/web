
@section('content')
    <h1>Dashboard</h1>
    <p>Welcome to the admin dashboard!</p>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">

                    
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
                                        <a href="mailto:{{ $trainer->email }}"><i class="fa fa-envelope text-primary"></i></a>
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


                    </div>
                </div>
            </div>
        </div>

@endsection
