@extends('admin_panel.layouts.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mb-0">Slide Custom Area</h3>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->

            <div class="card card-info card-outline mb-4">

                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Gym_Member ID:</div>
                        {{-- begin minimize and close tools  --}}
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"
                                title="Collapse">
                                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        {{--  end minimize and close tools  --}}
                </div>


                <!--end::Header-->

                <!--begin::Form-->
                <form class="needs-validation" novalidate="">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row g-3">

                            <!--begin::Col-->
                            <div class="col-md-6">
                                 <label for="first_headingBlue" class="form-label">
                                First Name
                                </label>
                                <input type="text" class="form-control text-danger" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    Lasat Name
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    Phone NO
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                 <label for="first_headingBlue" class="form-label">
                                    Address
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    Gender
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    Brithday
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                             <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    First Line Blue Part
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                             <!--begin::Col-->
                            <div class="col-md-6">
                                  <label for="first_headingBlue" class="form-label">
                                    First Line Blue Part
                                </label>
                                <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required="">
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button class="btn btn-info" type="submit">Submit form</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
                <!--begin::JavaScript-->

                <!--end::JavaScript-->
            </div>
        @endsection
