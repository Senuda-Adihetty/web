@extends('admin_panel.layouts.master')

@section('content')
    {{--  begin::App Content Header  --}}
    <div class="app-content-header">
        {{--  begin::Container  --}}
        <div class="container-fluid">
            {{--  begin::Row  --}}
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mb-0">New User Custom Area</h3>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Users</li>
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

                    <h3 class="card-title">New Registed Users</h3>
                </div>

                {{--  begin::Card Body  --}}
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" id="userPermission">
                        {{--  begin table header  --}}
                        <thead>
                            <tr>

                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile Image</th>

                                <th>Actons</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($users as $user)
                                <tr class="align-middle">

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $user->id }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $user->name }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $user->email }}
                                    </td>

                                    <td>
                                        <img width="100" src="{{ asset('storage/' . $user->image) }}" alt="">
                                    </td>

                                    <td>
                                        <form method="POST" action="/newuserUpdate/{{ $user->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="role" value="member">

                                            <button type="submit" class="btn btn-primary">
                                                Update As Member
                                            </button>
                                        </form>


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
@endsection
