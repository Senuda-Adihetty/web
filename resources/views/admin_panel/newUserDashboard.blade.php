@section('content')
    <div class="container-fluid py-4">
        <h1 class="mb-3">Dashboard</h1>
        <p>Welcome to the New user dashboard!</p>

        <div class="alert alert-success mt-4" role="alert">
            <h4 class="alert-heading">Login Successful!</h4>
            <p>You have successfully logged in to the Gym Fitness Center website.</p>
        </div>

        <div class="alert alert-danger mt-4" role="alert">
            <h5 class="alert-heading">Account Activation Required</h5>
            <p>To activate your account, you must pay a registration fee of <strong>Rs. 1000</strong> either by visiting
                the gym or by selecting one of the banks listed below. After payment, your account will be unlocked.</p>
        </div>

        <div class="alert alert-info mt-4" role="alert">
            <p>If you make the payment via bank, you must verify it by showing the receipt either to the gym in person or
                by sending it to the WhatsApp number below.</p>
        </div>

        <div class="row g-4 mt-3">
            @foreach ($banks as $bank)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center"> <h4>{{ $bank->bank_name }}</h4></div>


                            <p class="card-text mb-1"><strong>Branch:</strong> {{ $bank->branch_name }}</p>
                            <p class="card-text mb-1"><strong>Account Name:</strong> {{ $bank->account_name }}</p>
                            <p class="card-text mb-1"><strong>Account Number:</strong> {{ $bank->account_number }}</p>
                            <br>
                            <p class="card-text"><strong></strong> {{ $bank->notes }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



{{--  <div class="row">
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
            </div>  --}}
