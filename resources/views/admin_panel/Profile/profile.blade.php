@extends('admin_panel.layouts.master')

{{--  I edit this file to add the profile page, I want
 I am remove tailwind css and add bootstrap
 I am add bootstrap classes to the form  --}}


@section('content')

    {{--  begin::App Content Header  --}}
    <div class="app-content-header">
        {{--  begin::Container  --}}
        <div class="container-fluid">
            {{--  begin::Row  --}}
            <div class="row">

                <div class="col-sm-8">
                    <h3 class="mb-0">
                        Profile Custom Area
                    </h3>
                </div>

                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/dashboard"> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            {{--  end::Row  --}}



            {{--  Begin Success Massege  --}}
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

            {{--  update Password Success Massege  --}}
            @if (session('status') === 'password-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Update Password Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- end update Password Success Massege  --}}


            <div class="py-5">
                <div class="container">

                    <div class="row gy-4">
                        <div class="col-12 col-md-8 col-lg-6 shadow-sm p-4 rounded">
                            @include('admin_panel.Profile.updateProfile')
                            {{--  I  edit this include path  --}}
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 shadow-sm p-4 rounded">
                            @include('admin_panel.Profile.updatePassword')
                            {{--  I  edit this include path  --}}
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 shadow-sm p-4 rounded">
                            @include('admin_panel.Profile.deleteProfile')
                            {{--  I  edit this include path  --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
