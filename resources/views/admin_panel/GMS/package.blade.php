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

        {{-- --------------------------------------------------------------------------------------- --}}

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
                    <form method="POST" action="/savepackage" enctype="multipart/form-data">
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
                                <label for="details" class="form-label">
                                    Details
                                </label>
                                <div id="details-container">
                                    <div class="detail-group mb-2">
                                        <input type="text" class="form-control mb-2" name="details[]" id="details"
                                            placeholder="Enter detail">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="addDetail()">+ Add
                                    More</button>
                            </div>

                            {{--  Valid Period Part  --}}
                            <div class="mb-3">
                                <label for="valid" class="form-label">
                                    Valid Period
                                </label>
                                <input type="text" class="form-control" name="valid" id="valid">
                            </div>

                            {{-- Amount Part  --}}
                            <div class="mb-3">
                                <label for="price" class="form-label">
                                    Amount
                                </label>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>


                            {{-- Upload Image --}}
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">
                                    Upload Package Image
                                </label>
                                <input type="file" name="image" class="form-control" onchange="previewImage(event)"
                                    id="image"> {{-- onchange event to preview image --}}
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


        {{--  begin::App Content Header  --}}
        <div class="app-content-header">
            {{--  begin::Container  --}}
            <div class="container-fluid">
                {{--  begin::Row  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Package Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
                        </ol>
                    </div>
                </div>
                {{--  end::Row  --}}


                {{--  begin table  --}}
                <div class="card mb-4">
                    <div class="card-header">

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

                        <h3 class="card-title">All Packages</h3>
                    </div>

                    {{--  begin::Card Body  --}}
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="trainer">
                            {{--  begin table header  --}}
                            <thead>
                                <tr>

                                    <th style="width: 10px">Id</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Validate</th>
                                    <th>Amount</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($packages as $package)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $package->id }}

                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $package->name }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{--  Displaying details as a list  --}}
                                            <ul>
                                                @foreach ($package->details as $detail)
                                                    <li>{{ $detail }}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $package->valid }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $package->price }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            <img src="{{ asset('storage/' . $package->image) }}" alt="Package Image"
                                                class="img-thumbnail" style="max-width: 100px;">
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">


                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#packagemodal{{ $package->id }}">
                                                Edit
                                            </button>

                                            {{--  begin Modal for edit Button  --}}
                                            <div class="modal fade" id="packagemodal{{ $package->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog card card-info card-outline mb-0">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Edit Package
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>


                                                        <form method="POST" action="/packageUpdate/{{ $package->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                           

                                                            <input type="hidden" name="id"
                                                                value="{{ $package->id }}">

                                                            <div class="modal-body">

                                                                {{--  Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">
                                                                        Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" id="name"
                                                                        value="{{ $package->name }}">
                                                                </div>

                                                                {{--  Description Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="details" class="form-label">
                                                                        Description
                                                                    </label>
                                                                    <div id="details-container{{ $package->id }}">
                                                                        @foreach ($package->details as $detail)
                                                                            <div class="detail-group mb-2">
                                                                                <input type="text"
                                                                                    class="form-control mb-2"
                                                                                    name="details[]"
                                                                                    value="{{ $detail }}"
                                                                                    placeholder="Enter detail">
                                                                            </div>
                                                                        @endforeach
                                                                    </div>

                                                                    <button type="button"
                                                                        class="btn btn-outline-primary btn-sm"
                                                                        onclick="updateDetail({{ $package->id }})">+ Add
                                                                        More</button>

                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="valid" class="form-label">
                                                                        Valid Period
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="valid" id="valid"
                                                                        value="{{ $package->valid }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="price" class="form-label">
                                                                        Amount
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="price" id="price"
                                                                        value="{{ $package->price }}">
                                                                </div>

                                                                <div class="row">
                                                                    {{-- Current Trainer Photo --}}
                                                                    @if ($package->image)
                                                                        <div class="col-md-6 mb-3">
                                                                            <label class="form-label">
                                                                                Current Package Photo

                                                                            </label>

                                                                            <img src="{{ asset('storage/' . $package->image) }}"
                                                                                alt="Current image" width="150">
                                                                        </div>
                                                                    @endif

                                                                    {{-- Image Preview --}}
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label">Preview New
                                                                            Image</label><br>
                                                                        <img id="imagePreview2{{ $package->id }}"
                                                                            src="#" alt="Image Preview2"
                                                                            style="display: none; margin-top: 10px; max-width: 200px;">
                                                                    </div>


                                                                </div>
                                                                {{-- upload new Image --}}
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">
                                                                        Upload New Package Image
                                                                    </label>
                                                                    <input type="file" name="image"
                                                                        class="form-control"
                                                                        onchange="previewImage2(event, {{ $package->id }})"
                                                                        id="image">
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                        Package</button>
                                                                </div>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  end Modal for edit Button --}}

                                            {{--  Delete Button  --}}
                                            <a href="{{ route('package.delete', $package->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this slide?')"
                                                class="btn btn-danger">
                                                Delete
                                            </a>


                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                            {{--  end table header  --}}
                        </table>
                    </div>
                    {{--  end::Card Body  --}}
                </div>
                {{--  end table  --}}
            </div>
            {{--  end::Container  --}}
        </div>
        {{--  end::App Content Header  --}}















        <script>
            function updateDetail(id) {
                const container = document.getElementById("details-container" + id);
                const newInput = document.createElement("div");
                newInput.classList.add("detail-group");
                newInput.innerHTML =
                    '<input type="text" class="form-control mb-2" name="details[]" placeholder="Enter detail">';
                container.appendChild(newInput);
            }
        </script>

        <script>
            function addDetail() {
                const container = document.getElementById("details-container");
                const newInput = document.createElement("div");
                newInput.classList.add("detail-group");
                newInput.innerHTML =
                    '<input type="text" class="form-control mb-2" name="details[]" placeholder="Enter detail">';
                container.appendChild(newInput);
            }
        </script>

        <script>
            function previewImage2(event, id) {
                const reader = new FileReader();
                reader.onload = function() {
                    const output = document.getElementById('imagePreview2' + id);
                    output.src = reader.result;
                    output.style.display = 'block';
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>



    @endsection
