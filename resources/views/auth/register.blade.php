
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Register</title>
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

                            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="margin-top: -45px;">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="d-flex align-items-center mb-2 pb-1">


                                            <img src="{{ asset('signIN/img/logo.png') }}" alt="" width="65"
                                                class="d-inline-block align-text-top" style="margin-left: 45px;" />

                                            <h1 class="h1 fw-bold mb-0 ms-4">THE GYM
                                            </h1>


                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #0c56d0">
                                            Create
                                            your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="name" name="name"
                                                class="form-control" placeholder="Name" />
                                            <label class="form-label" for="name">Name*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email"
                                                class="form-control" />
                                            <label class="form-label" for="email">Email*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password"
                                                class="form-control" placeholder="Phone number or email address" />
                                            <label class="form-label" for="password">Password*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password_confirmation" name="password_confirmation"
                                                class="form-control" />
                                            <label class="form-label" for="password_confirmation">Comform Password*</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="file" name="image" class="form-control"
                                                onchange="previewImage(event)" id="image">
                                        </div>

                                        {{--  preview Image Code  --}}
                                        <div class="form-outline mb-4">
                                            <center>
                                                <img id="imagePreview" src="#" alt="Image Preview"
                                                    style="display: none; margin-top: 10px; max-width: 200px; border-radius: 10px;"
                                                    class="rounded-circle shadow" width="150px" height="150px">
                                            </center>
                                        </div>
                                        {{-- end  preview Image Code  --}}


                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">
                                                Register
                                            </button>
                                            <a style="color: #ff0000" href="{{ route('login') }}">Already registered?</a>
                                        </div>


                                    </form>


                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 d-none d-md-block">

                                <img src="{{ asset('signIN/img/slider21.jpg') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 0rem 2rem 2rem 0rem ;" />
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


    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>




</body>

</html>



