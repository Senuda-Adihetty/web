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
                            Create New Blog
                        </button>

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Bottom Area-->


        {{--  begin Modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog card card-info card-outline mb-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add New Blog
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form method="POST" action="/saveBlog" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">





                            {{-- Title Part  --}}
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    Title
                                </label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            {{--  Slug Part  --}}
                            <div class="mb-3">
                                <label for="slug" class="form-label">
                                    Slug
                                </label>
                                <input type="text" class="form-control" name="slug" id="slug">
                            </div>

                            {{-- Body  --}}
                            <div class="mb-3">
                                <label for="body" class="form-label">
                                    Body
                                </label>
                                <textarea class="form-control" id="body" name="body" rows="10"></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    Upload Image
                                </label>
                                <input type="file" name="image" class="form-control" onchange="previewImage(event)"
                                    id="image">
                            </div>

                            {{--  preview Image Code  --}}
                            <div class="mb-3">
                                <center>
                                    <center>
                                        <img id="imagePreview" src="#" alt="Image Preview"
                                            style="display: none; margin-top: 10px; max-width: 200px;">
                                    </center>
                                </center>
                            </div>
                            {{-- end  preview Image Code  --}}

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Blog </button>
                            </div>

                        </div>
                </div>
            </div>

            </form>
        </div>

        {{--  end Modal  --}}

        {{--  begin::App Content Header  --}}
        <div class="app-content-header">
            {{--  begin::Container  --}}
            <div class="container-fluid">
                {{--  begin::Row  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Blogs Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </div>
                </div>
                {{--  end::Row  --}}


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

                        <h3 class="card-title">Available Blogs</h3>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="blog">
                            <thead>
                                <tr>

                                    <th style="width: 10px">#</th>
                                    <th>title</th>
                                    <th>slug</th>
                                    <th>body</th>
                                    <th>Date & Time</th>
                                    <th>image</th>
                                    <th>Actons</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($blogs as $blog)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $blog->id }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $blog->title }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $blog->slug }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $blog->body }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $blog->created_at }}
                                        </td>

                                        <td>
                                            <img width="100" src="{{ asset('storage/' . $blog->image) }}"
                                                alt="">
                                        </td>

                                        <td>

                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#blogmodal{{ $blog->id }}">
                                                Edit
                                            </button>


                                            <a href="{{ route('blog.delete', $blog->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this slide?')"
                                                class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>



                                    {{--  begin Modal for Edit Button --}}

                                    <div class="modal fade" id="blogmodal{{ $blog->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog card card-info card-outline mb-0">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Edit Blog
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>


                                                <form method="POST" action="/blogUpdate/{{ $blog->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="modal-body">


                                                        {{-- Title Part  --}}
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">
                                                                Title
                                                            </label>
                                                            <input type="text" class="form-control" name="title"
                                                                id="title" value="{{ $blog->title }}">
                                                        </div>

                                                        {{--  Slug Part  --}}
                                                        <div class="mb-3">
                                                            <label for="slug" class="form-label">
                                                                Slug
                                                            </label>
                                                            <input type="text" class="form-control" name="slug"
                                                                id="slug" value="{{ $blog->slug }}">
                                                        </div>

                                                        {{-- Body  --}}
                                                        <div class="mb-3">
                                                            <label for="body" class="form-label">
                                                                Body
                                                            </label>
                                                            <textarea class="form-control" id="body" name="body" rows="10">{{ $blog->body }}</textarea>
                                                        </div>


                                                        <div class="row">
                                                            {{-- Current Blog Photo --}}
                                                            @if ($blog->image)
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">
                                                                        Current Blog Photo

                                                                    </label>

                                                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                                                        alt="Blog Image" width="150">
                                                                </div>
                                                            @endif

                                                            {{-- Image Preview --}}
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Preview New
                                                                    Image</label><br>
                                                                <img id="imagePreview2" src="#"
                                                                    alt="Image Preview2"
                                                                    style="display: none; margin-top: 10px; max-width: 200px;">
                                                            </div>
                                                        </div>

                                                        {{-- upload new Image --}}
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">
                                                                Upload New Blog Image
                                                            </label>
                                                            <input type="file" name="image" class="form-control"
                                                                onchange="previewImage2(event)" id="image">
                                                        </div>



                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Update Blog
                                                            </button>
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
            </div>
            <!-- /.card-body -->

        </div>
        {{--  end table  --}}









        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content Header-->

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

            function previewImage2(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    const output = document.getElementById('imagePreview2');
                    output.src = reader.result;
                    output.style.display = 'block';
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>

    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#blog').DataTable({
                    pageLength: 5,
                    lengthMenu: [
                        [5, 10, 25, 50, 100],
                        [5, 10, 25, 50, 100]
                    ]
                });
            });
        </script>
    @endpush
