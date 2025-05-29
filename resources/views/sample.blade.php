{{--  bootstrap pop-pup massege  --}}
{{--  bootstrap js cdn link need  --}}
{{-- Toast for Success Message --}}
@if (session()->has('success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
{{-- End Toast for Success Message --}}
{{-- Toast for Error Message --}}
@if (session()->has('error'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
{{-- End Toast for Error Message --}}
{{-- end bootstrap pop-pup massege  --}}





{{--  Normal Bootstrap Alert  --}}
{{-- Begin Success Massege  --}}
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- End Error Massege  --}}
{{-- End Normal Bootstrap Alert  --}}



{{-- Start Pop-pup Error Massege with JS --}}
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

@if (session()->has('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        });
    </script>
@endif


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- End Pop-pup Error Massege with JS --}}


{{--  Ligt mod Dark mod toggle Button  --}}
<div class="form-check form-switch p-2">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked
        onclick="myFunction()">
</div>
{{--  This is light and dark mode script  --}}
<script>
    // Run when page loads
    window.onload = function() {
        var element = document.body;
        var toggle = document.getElementById("flexSwitchCheckChecked");

        // Default theme
        if (!element.dataset.bsTheme) {
            element.dataset.bsTheme = "light";
        }

        // Set toggle state based on current theme
        toggle.checked = element.dataset.bsTheme === "dark";
    }

    // Toggle theme
    function myFunction() {
        var element = document.body;
        element.dataset.bsTheme =
            element.dataset.bsTheme === "light" ? "dark" : "light";

        // Optional: save preference to localStorage
        // localStorage.setItem("theme", element.dataset.bsTheme);
    }
</script>
{{-- End  Ligt mod Dark mod toggle Button  --}}




@extends('admin_panel.layouts.master')

@section('content')

    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Top Area-->
        <div class="app-content-top-area">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">


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


                    <div class="col-md-6 text-end">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Anousement
                        </button>

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Bottom Area-->


        {{--  Modal  --}}


        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Anousement Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Anousement</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->

                {{--  table  --}}

            </div>
        </div>

    @endsection
