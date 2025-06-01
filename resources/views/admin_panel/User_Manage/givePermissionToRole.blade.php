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
                            Add Permission
                        </button>

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Bottom Area-->

        {{--  begin::App Content Header  --}}
        <div class="app-content-header">
            {{--  begin::Container  --}}
            <div class="container-fluid">
                {{--  begin::Row  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Role:{{ $role->name }}</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="/roleIndex">Roles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Assign Permission</li>
                        </ol>
                    </div>
                </div>
                {{--  end::Row  --}}


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

                        <h3 class="card-title"> <label for="role_id">Permissions</label></h3>
                    </div>

                    {{--  begin::Card Body  --}}
                    <div class="card-body">

                        <form action="{{ url('givePermissionToRole/' . $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="row">
                                @foreach ($permissions as $permission)
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                                value="{{ $permission->name }}" id="defaultCheck1"
                                                {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} />
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    {{--  end::Card Body  --}}

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
            {{-- end::Container --}}
        </div>
        {{--  end::App Content Header  --}}


    @endsection
