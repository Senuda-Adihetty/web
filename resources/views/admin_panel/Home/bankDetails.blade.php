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
                            Add New Bank Details
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
                            Add New Bank Details
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    {{--  Form Start  --}}
                    <form method="POST" action="/savebankDetails" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">


                            {{--  Bank Name Part  --}}
                            <div class="mb-3">
                                <label for="bank_name" class="form-label">
                                    Bank Name*
                                </label>
                                <input type="text" class="form-control" name="bank_name" id="bank_name">
                            </div>

                            {{--  Bank Name Part  --}}
                            <div class="mb-3">
                                <label for="branch_name" class="form-label">
                                    Bank Branch*
                                </label>
                                <input type="text" class="form-control" name="branch_name" id="branch_name">
                            </div>

                            {{--  Bank Name Part  --}}
                            <div class="mb-3">
                                <label for="account_name" class="form-label">
                                    Account Holder Name*
                                </label>
                                <input type="text" class="form-control" name="account_name" id="account_name">
                            </div>

                            {{--  Banka Account Number  --}}
                            <div class="mb-3">
                                <label for="account_number" class="form-label">
                                    Account Number*
                                </label>
                                <input type="text" class="form-control" name="account_number" id="account_number">
                            </div>

                            {{--  Special Note  --}}
                            <div class="mb-3">
                                <label for="notes" class="form-label">
                                    Special Note
                                </label>
                                <input type="text" class="form-control" name="notes" id="notes">
                            </div>



                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Add Bank
                            </button>

                        </div>

                    </form>
                    {{--  Form End  --}}
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
                        <h3 class="mb-0">Bank Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bank Details</li>
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

                        <h3 class="card-title">Available Bank Details</h3>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="bank">
                            <thead>
                                <tr>

                                    <th style="width: 10px">#</th>
                                    <th>Details</th>
                                    <th>Actons</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($banks as $bank)
                                    <tr class="align-middle">

                                        <td>{{ $bank->id }}</td>

                                        <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                            <p>
                                                <strong>Bank:</strong> {{ $bank->bank_name }}<br>
                                                <strong>Branch:</strong> {{ $bank->branch_name }}<br>
                                                <strong>ACC Name:</strong> {{ $bank->account_name }}<br>
                                                <strong>ACC NO:</strong> {{ $bank->account_number }}<br>
                                                <strong>Note:</strong> {{ $bank->notes }}<br>
                                            </p>
                                        </td>


                                        <td>

                                            {{--  Button trigger modal  --}}
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#bankModal{{ $bank->id }}">
                                                Edit
                                            </button>

                                            {{--  begin Modal for edit Button  --}}
                                            <div class="modal fade" id="bankModal{{ $bank->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog card card-info card-outline mb-0">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Edit Bank Detail
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>


                                                        <form method="POST"
                                                            action="/bankDetailsUpdate/{{ $bank->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="id"
                                                                value="{{ $bank->id }}">

                                                            <div class="modal-body">


                                                                {{--  Bank Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="bank_name" class="form-label">
                                                                        Bank Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="bank_name" id="bank_name"
                                                                        value="{{ $bank->bank_name }}">
                                                                </div>

                                                                {{--  Bank Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="branch_name" class="form-label">
                                                                        Bank Branch
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="branch_name" id="branch_name"
                                                                        value="{{ $bank->branch_name }}">
                                                                </div>

                                                                {{--  Bank Name Part  --}}
                                                                <div class="mb-3">
                                                                    <label for="account_name" class="form-label">
                                                                        Account Holder Name
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="account_name" id="account_name"
                                                                        value="{{ $bank->account_name }}">
                                                                </div>

                                                                {{--  Banka Account Number  --}}
                                                                <div class="mb-3">
                                                                    <label for="account_number" class="form-label">
                                                                        Account Number
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="account_number" id="account_number"
                                                                        value="{{ $bank->account_number }}">
                                                                </div>

                                                                {{--  Special Note  --}}
                                                                <div class="mb-3">
                                                                    <label for="notes" class="form-label">
                                                                        Special Note
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="notes" id="notes"
                                                                        value="{{ $bank->notes }}">
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Update
                                                                    </button>
                                                                </div>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  end Modal for edit Button --}}


                                            <a href=""
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
                $('#bank').DataTable({
                    pageLength: 5,
                    lengthMenu: [
                        [5, 10, 25, 50, 100],
                        [5, 10, 25, 50, 100]
                    ]
                });
            });
        </script>
    @endpush
