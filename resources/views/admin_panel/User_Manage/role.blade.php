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
                            Add Role
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
                            Add New Role
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form method="POST" action="/saveRole" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">

                            {{--  Name Part  --}}
                            <div class="mb-3">
                                <label for="role_name" class="form-label">
                                    Role Name
                                </label>
                                <input type="text" class="form-control" name="role_name" id="role_name">
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
                        <h3 class="mb-0">Role Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Role</li>
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

                        <h3 class="card-title">Available Roles</h3>
                    </div>

                    {{--  begin::Card Body  --}}
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="blog">
                            <thead>
                                <tr>

                                    <th style="width: 10px">Id</th>
                                    <th>RoleName</th>
                                    <th>Actons</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($roles as $role)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $role->id }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $role->name }}
                                        </td>

                                        <td>

                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#rolemodal{{ $role->id }}">
                                                Edit
                                            </button>

                                            {{--  begin Modal for edit Button  --}}
                                            <div class="modal fade" id="rolemodal{{ $role->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog card card-info card-outline mb-0">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Edit Role
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>


                                                        <form method="POST" action="/roleUpdate"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="role_id"
                                                                value="{{ $role->id }}">

                                                            <div class="modal-body">

                                                                {{--  Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="role_name" class="form-label">
                                                                        Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="role_name" id="role_name"
                                                                        value="{{ $role->name }}">
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                        Role</button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  end Modal for edit Button --}}


                                            <a href="/permissionToRole/{{ $role->id }}" class="btn btn-primary">Add
                                                Permission to Role</a>

                                            <a href="{{ route('role.delete', $role->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this slide?')"
                                                class="btn btn-danger">
                                                Delete
                                            </a>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{--  end::Card Body  --}}
                </div>
                {{--  end table  --}}


            </div>
            {{-- end::Container --}}

        </div>
        {{--  end::App Content Header  --}}

    @endsection
