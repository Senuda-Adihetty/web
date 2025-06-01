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

                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Bottom Area-->

        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Masseges Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Masseges</li>
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

                        <h3 class="card-title">Available Masseges</h3>
                    </div>

                    {{--  begin::Card Body  --}}
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="massege">
                            {{--  begin table header  --}}
                            <thead>
                                <tr>

                                    <th style="width: 10px">Id</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created At</th>
                                    <th>Actons</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($contacts as $contact)
                                    <tr class="align-middle">

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->id }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->sender_name }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->sender_subject }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->sender_message }}
                                        </td>
                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->sender_email }}
                                        </td>
                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->sender_phone }}
                                        </td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            {{ $contact->created_at }}
                                        </td>


                                        <td>

                                            <a href="{{ route('contact.delete', $contact->id) }}"
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

    @endsection

       @push('scripts')
        <script>
            $(document).ready(function() {
                $('#massege').DataTable({
                    pageLength: 5,
                    lengthMenu: [
                        [5, 10, 25, 50, 100],
                        [5, 10, 25, 50, 100]
                    ]
                });
            });
        </script>
    @endpush
