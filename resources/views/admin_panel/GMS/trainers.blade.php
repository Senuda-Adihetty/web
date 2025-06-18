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
                            Add Trainer
                        </button>

                    </div>
                </div>
            </div>
            {{--  end::Container  --}}
        </div>
        {{--  end::App Content Bottom Area  --}}

        {{--  begin Modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog card card-info card-outline mb-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add New Trainer
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form method="POST" action="/saveTrainer" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">

                            {{--  Name Part  --}}
                            <div class="mb-3">
                                <label for="Trainer_ID" class="form-label">
                                    Trainer ID
                                </label>
                                 <input type="text" name="Trainer_ID" value="{{ $nextId }}" class="form-control" id="Trainer_ID">
                                {{--  <input type="text" class="form-control" name="Trainer_ID" >  --}}
                            </div>

                            {{--  Name Part  --}}
                            <div class="mb-3">
                                <label for="fName" class="form-label">
                                    First Name
                                </label>
                                <input type="text" class="form-control" name="fName" id="fName">
                            </div>
                            {{--  Name Part  --}}
                            <div class="mb-3">
                                <label for="lName" class="form-label">
                                    Last Name
                                </label>
                                <input type="text" class="form-control" name="lName" id="lName">
                            </div>
                            {{--  Email Part  --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                            <div class="mb-3">
                                <label for="phone_No" class="form-label">
                                    Phone Number
                                </label>
                                <input type="text" class="form-control" name="phone_No" id="phone_No">
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">
                                    Gender
                                </label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="birthday" class="form-label">
                                    Birthday
                                </label>
                                <input type="date" class="form-control" name="birthday" id="birthday">
                            </div>


                            <div class="mb-3">
                                <label for="address" class="form-label">
                                    Address
                                </label>
                                <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="qulification" class="form-label">
                                    Qulification
                                </label>
                                <input type="text" class="form-control" name="qulification" id="qulification">
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">
                                    Photo For Card
                                </label>
                                <input type="file" class="form-control" name="photo" id="photo"
                                    onchange="previewImage(event)">
                            </div>

                            <div class="mb-3">
                                <label for="basic_Sal" class="form-label">
                                    Basic Salary
                                </label>
                                <input type="text" class="form-control" name="basic_Sal" id="basic_Sal">
                            </div>

                            <div class="mb-3">
                                <label for="fb" class="form-label">
                                    Facebook Account
                                </label>
                                <input type="text" class="form-control" name="fb" id="fb">
                            </div>

                            <div class="mb-3">
                                <label for="insta" class="form-label">
                                    Instagram Account
                                </label>
                                <input type="text" class="form-control" name="insta" id="insta">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Permission</button>
                            </div>

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
                        <h3 class="mb-0">Trainers Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Trainers</li>
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

                        <h3 class="card-title">All Trainers</h3>
                    </div>

                    {{--  begin::Card Body  --}}
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="trainer">
                            {{--  begin table header  --}}
                            <thead>
                                <tr>

                                    <th style="width: 10px">Id</th>
                                    <th>Information</th>
                                    <th>Photo</th>
                                    <th>Actons</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($trainers as $trainer)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $trainer->Trainer_ID }}

                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            <p>
                                                <strong>First Name:</strong> {{ $trainer->fName }}<br>
                                                <strong>Last Name:</strong> {{ $trainer->lName }}<br>
                                                <strong>Email:</strong> {{ $trainer->email }}<br>
                                                <strong>Phone No:</strong> {{ $trainer->phone_No }}<br>
                                                <strong>Address:</strong> {{ $trainer->address }}<br>
                                                <strong>Gender:</strong> {{ $trainer->gender }}<br>
                                                <strong>Basic Salary:</strong> {{ $trainer->basic_Sal }}<br>
                                                <strong>Facebook Account:</strong> {{ $trainer->fb }}<br>
                                                <strong>Instagram Account:</strong> {{ $trainer->insta }}<br>

                                            </p>
                                        </td>

                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $trainer->photo) }}" alt="image"
                                                height="400">
                                        </td>

                                        <td>

                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#trainermodal{{ $trainer->id }}">
                                                Edit
                                            </button>

                                            {{--  begin Modal for edit Button  --}}
                                            <div class="modal fade" id="trainermodal{{ $trainer->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog card card-info card-outline mb-0">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Edit Trainer
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>


                                                        <form method="POST" action="/trainerUpdate/{{ $trainer->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="id"
                                                                value="{{ $trainer->id }}">

                                                            <div class="modal-body">

                                                                {{--  Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="Trainer_ID" class="form-label">
                                                                        Trainer ID
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="Trainer_ID" id="Trainer_ID"
                                                                        value="{{ $trainer->Trainer_ID }}">
                                                                </div>

                                                                {{--  Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="fName" class="form-label">
                                                                        First Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="fName" id="fName"
                                                                        value="{{ $trainer->fName }}">
                                                                </div>
                                                                {{--  Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="lName" class="form-label">
                                                                        Last Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="lName" id="lName"
                                                                        value="{{ $trainer->lName }}">
                                                                </div>
                                                                {{--  Email Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">
                                                                        Email
                                                                    </label>

                                                                    <input type="text" class="form-control"
                                                                        name="email" id="email"
                                                                        value="{{ $trainer->email }}" readonly>
                                                                    <small> * email unique FOR ATHENICATION this
                                                                        website</small>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="phone_No" class="form-label">
                                                                        Phone Number
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="phone_No" id="phone_No"
                                                                        value="{{ $trainer->phone_No }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="gender" class="form-label">
                                                                        Gender
                                                                    </label>
                                                                    <select class="form-control" name="gender"
                                                                        id="gender">
                                                                        <option value="male"
                                                                            {{ $trainer->gender == 'male' ? 'selected' : '' }}>
                                                                            Male</option>
                                                                        <option value="female"
                                                                            {{ $trainer->gender == 'female' ? 'selected' : '' }}>
                                                                            Female</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="birthday" class="form-label">
                                                                        Birthday
                                                                    </label>
                                                                    <input type="date" class="form-control"
                                                                        name="birthday" id="birthday"
                                                                        value="{{ $trainer->birthday }}">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="address" class="form-label">
                                                                        Address
                                                                    </label>
                                                                    <textarea class="form-control" name="address" id="address" rows="4"> {{ $trainer->address }}</textarea>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="qulification" class="form-label">
                                                                        Qulification
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="qulification" id="qulification"
                                                                        value="{{ $trainer->qulification }}">
                                                                </div>

                                                                <div class="row">
                                                                    {{-- Current Trainer Photo --}}
                                                                    @if ($trainer->photo)
                                                                        <div class="col-md-6 mb-3">
                                                                            <label class="form-label">
                                                                                Current Trainer Photo

                                                                            </label>

                                                                            <img src="{{ asset('storage/' . $trainer->photo) }}"
                                                                                alt="trainer image" width="150">
                                                                        </div>
                                                                    @endif

                                                                    {{-- Image Preview --}}
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label">Preview New
                                                                            Image</label><br>
                                                                        <img id="imagePreview2{{ $trainer->id }}"
                                                                            src="#" alt="Image Preview2"
                                                                            style="display: none; margin-top: 10px; max-width: 200px;">
                                                                    </div>


                                                                </div>
                                                                {{-- upload new Image --}}
                                                                <div class="mb-3">
                                                                    <label for="photo" class="form-label">
                                                                        Upload New Trainer Image
                                                                    </label>
                                                                    <input type="file" name="photo"
                                                                        class="form-control"
                                                                        onchange="previewImage2(event, {{ $trainer->id }})"
                                                                        id="photo">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="basic_Sal" class="form-label">
                                                                        Basic Salary
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="basic_Sal" id="basic_Sal"
                                                                        value="{{ $trainer->basic_Sal }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="fb" class="form-label">
                                                                        Facebook Account
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="fb" id="fb"
                                                                        value="{{ $trainer->fb }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="insta" class="form-label">
                                                                        Instagram Account
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="insta" id="insta"
                                                                        value="{{ $trainer->insta }}">
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                        Trainer</button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  end Modal for edit Button --}}



                                            <a href="{{ route('trainers.delete', $trainer->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this slide?')"
                                                class="btn btn-danger">
                                                Delete
                                            </a>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{--  end table  --}}
                    </div>
                    {{--  end::Card Body  --}}
                </div>
            </div>
            {{-- end::Container --}}
        </div>
        {{--  end::App Content Header  --}}


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

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#trainer').DataTable({
                    pageLength: 5,
                    lengthMenu: [
                        [5, 10, 25, 50, 100],
                        [5, 10, 25, 50, 100]
                    ]
                });
            });
        </script>
    @endpush
