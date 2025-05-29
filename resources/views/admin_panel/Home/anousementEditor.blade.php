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


        {{--  begin Modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form method="POST" action="/anousementSave" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">

                            <div class="card card-info card-outline mb-0">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>

                                <div class="card-body">
                                    {{--  First Line Black Part  --}}
                                    <div class="mb-3">
                                        <label for="title" class="form-label">
                                            Title
                                        </label>
                                        <input type="text" class="form-control" name="title" id="title">
                                        {{--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>  --}}
                                    </div>

                                    {{--  First Line Blue Part  --}}
                                    <div class="mb-3">
                                        <label for="description" class="form-label">
                                            Description
                                        </label>
                                        <input type="text" class="form-control" name="description" id="description">
                                    </div>

                                    {{--  Second Line Black Part  --}}
                                    <div class="mb-3">
                                        <label for="more_infoLink" class="form-label">
                                            link
                                        </label>
                                        <input type="text" class="form-control" name="more_infoLink" id="more_infoLink">
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Anousement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        {{--  end Modal  --}}



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

                {{--  begin table  --}}
                <div class="card mb-4">
                    <div class="card-header">

                        {{-- begin minimize and close tools  --}}
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        {{--  end minimize and close tools  --}}

                        <h3 class="card-title">Available Anousements</h3>
                    </div>
                    

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($anousements as $anousement)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $anousement->id }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $anousement->title }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $anousement->description }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $anousement->more_infoLink }}
                                        </td>

                                        <td>

                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#anousementmodal{{ $anousement->id }}">
                                                Edit
                                            </button>


                                            <a href="{{ route('anousement.delete', $anousement->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this slide?')"
                                                class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                    {{--  begin Modal for Edit Button --}}

                                    <div class="modal fade" id="anousementmodal{{ $anousement->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Slide</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>


                                                <form method="POST" action="/anousementIndex/{{ $anousement->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="modal-body">
                                                        <div class="card card-info card-outline mb-0">
                                                            <div class="card-header">
                                                                <h3 class="card-title"></h3>
                                                            </div>

                                                            <div class="card-body">
                                                                {{--  First Line Black Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="title" class="form-label">
                                                                        Title
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="title" id="title"
                                                                        value="{{ $anousement->title }}">
                                                                    {{--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>  --}}
                                                                </div>

                                                                {{--  First Line Blue Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="description" class="form-label">
                                                                        Description
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="description" id="description"
                                                                        value="{{ $anousement->description }}">
                                                                </div>

                                                                {{--  Second Line Black Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="more_infoLink" class="form-label">
                                                                        Link
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="more_infoLink" id="more_infoLink"
                                                                        value="{{ $anousement->more_infoLink }}">
                                                                </div>

                                                                </>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                        Anousement</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                    </div>
                    {{--  end Modal for Edit Button  --}}
                    @endforeach






                    </tbody>
                    </table>
                    {{--  end table  --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>










        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content Header-->








    @endsection
