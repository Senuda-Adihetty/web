<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('signIN/css/bootstrap-login-form.min.css') }}" />
</head>

<body>
    <!-- Start your project here-->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">

                                <img src="{{ asset('signIN/img/slider2.jpg') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 2rem 0 0 2rem ;" />
                            </div>

                            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="margin-top: -45px;">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf


                                        <div class="d-flex align-items-center mb-2 pb-1">


                                            <img src="{{ asset('signIN/img/logo.png') }}" alt="" width="65"
                                                class="d-inline-block align-text-top" style="margin-left: 20px;" />

                                            <h1 class="h1 fw-bold mb-0 ms-4">T H E G Y M
                                            </h1>


                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #0c56d0">Sign
                                            into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="checkbox" id="remember" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }} />
                                            <label class="form-label" for="remember">{{ __('Remember me') }}</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                                Login
                                            </button>
                                        </div>

                                        <a class="small text-muted" href="{{ route('password.request') }}">Forgot
                                            password?</a>

                                        <br><br>

                                        <p class="mb-5 pb-lg-2" style="color: #0c56d0">
                                            Do not have an account?
                                            <a href="{{ route('register') }}" style="color: #ff0000">
                                                Register here
                                            </a>
                                        </p>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->


    {{-- Start Error Massege  --}}
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- End Error Massege  --}}


    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('signIN/js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

</body>

</html>
