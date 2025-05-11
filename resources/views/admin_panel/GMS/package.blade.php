@extends('admin_panel.layouts.master')

@section('content')

    {{--  begin::App Main  --}}
    <main class="app-main">
        {{--  begin::App Content Top Area  --}}
        <div class="app-content-top-area">
            {{--  begin::Container  --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- End Error Massege  --}}
                    </div>

                    <div class="col-md-6 text-end">
                        {{--  Button trigger modal  --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add New Package
                        </button>
                    </div>
                </div>
            </div>
            {{--  end::Container  --}}
        </div>
        {{--  end::App Content Bottom Area  --}}


        {{-- ------------------------------------------------------------------------------------------ --}}


        {{--  begin Modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add New Slide
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    {{--  Form Start  --}}
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">

                            {{--  Package Name Part  --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Package Name
                                </label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            {{--  Description Part  --}}
                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    Description
                                </label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>

                            {{-- Amount Part  --}}
                            <div class="mb-3">
                                <label for="amount" class="form-label">
                                    Amount
                                </label>
                                <input type="text" class="form-control" name="amount" id="amount">
                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>

                            <button type="submit" class="btn btn-primary">
                                Add Package
                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
        {{--  end Modal  --}}







    @endsection
