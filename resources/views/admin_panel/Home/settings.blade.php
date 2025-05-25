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

                        {{--  Button trigger modal   --}}
                        {{--  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add New Slide
                        </button>    --}}

                    </div>
                </div>
            </div>
            {{--  end::Container  --}}
        </div>
        {{--  end::App Content Bottom Area  --}}

        {{--  begin::App Content Header  --}}
        <div class="app-content-header">
            {{--  begin::Container  --}}
            <div class="container-fluid">
                {{--  begin::Row  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mb-0">Site Custom Area</h3>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">site settings</li>
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

                        <h3 class="card-title">Available Anousements</h3>
                    </div>
                    {{--  <div class="card-header">
                        h
                    </div>  --}}

                    <div class="card-body">

                        <form action="/settingUpdate" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="site_name">Site Name</label>
                                <input type="text" name="site_name" id="site_name" class="form-control"
                                    value="{{ $setting['site_name'] }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="site_name">Site Mini Name</label>
                                <input type="text" name="site_description" id="site_description" class="form-control"
                                    value="{{ $setting['site_description'] }}">
                            </div>

                            <!-- Site Keywords -->
                            <div class="mb-3">
                                <label for="site_keywords" class="form-label">Site Description</label>
                                <input type="text" class="form-control" id="site_keywords" name="site_keywords"
                                    value="{{ $setting['site_keywords'] ?? '' }}">
                            </div>

                            <!-- Site Author -->
                            <div class="mb-3">
                                <label for="site_author" class="form-label">Site Author</label>
                                <input type="text" class="form-control" id="site_author" name="site_author"
                                    value="{{ $setting['site_author'] ?? '' }}">
                            </div>

                            <!-- Site Email -->
                            <div class="mb-3">
                                <label for="site_email" class="form-label">Site Email</label>
                                <input type="email" class="form-control" id="site_email" name="site_email"
                                    value="{{ $setting['site_email'] ?? '' }}">
                            </div>

                            <!-- Site Phone -->
                            <div class="mb-3">
                                <label for="site_phone" class="form-label">Site Phone</label>
                                <input type="text" class="form-control" id="site_phone" name="site_phone"
                                    value="{{ $setting['site_phone'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_fax_phone" class="form-label">Fax Phone</label>
                                <input type="text" class="form-control" id="site_fax_phone" name="site_fax_phone"
                                    value="{{ $setting['site_fax_phone'] ?? '' }}">
                            </div>


                            <div class="mb-3">
                                <label for="site_whatsApp_phone" class="form-label">WhatsApp Phone</label>
                                <input type="text" class="form-control" id="site_whatsApp_phone"
                                    name="site_whatsApp_phone" value="{{ $setting['site_whatsApp_phone'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_address" class="form-label">Site Address</label>
                                <input type="text" class="form-control" id="site_address" name="site_address"
                                    value="{{ $setting['site_address'] ?? '' }}">
                            </div>


                            @if ($setting['site_logo'] ?? false)
                                <div class="mb-3">
                                    <label class="form-label">Current Profile Photo</label><br>
                                    <img src="{{ asset($setting['site_logo']) }}" alt="Logo"
                                        class="rounded-square shadow" style="width: 150px; height: 180px;">
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="site_logo" class="form-label">Upload New Profile Photo</label>
                                <input type="file" class="form-control" name="site_logo" id="site_logo">
                            </div>




                            <div class="mb-3">
                                <label for="site_favicon" class="form-label">Site Favicon URL</label>
                                <input type="text" class="form-control" id="site_favicon" name="site_favicon"
                                    value="{{ $setting['site_favicon'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_google_analytics" class="form-label">Google Analytics</label>
                                <input type="text" class="form-control" id="site_google_analytics"
                                    name="site_google_analytics" value="{{ $setting['site_google_analytics'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_google_map" class="form-label">Google Map Embed</label>
                                <input type="text" class="form-control" id="site_google_map" name="site_google_map"
                                    value="{{ $setting['site_google_map'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_google_map_key" class="form-label">Google Map API Key</label>
                                <input type="text" class="form-control" id="site_google_map_key"
                                    name="site_google_map_key" value="{{ $setting['site_google_map_key'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="site_currency" class="form-label">Currency</label>
                                <input type="text" class="form-control" id="site_currency" name="site_currency"
                                    value="{{ $setting['site_currency'] ?? '' }}">
                            </div>




                            <!-- Social Media Links -->
                            <div class="mb-3">
                                <label for="facebook_link" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                                    value="{{ $setting['facebook_link'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="twitter_link" class="form-label">Twitter Link</label>
                                <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                                    value="{{ $setting['x_link'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                                <input type="text" class="form-control" id="linkedin_link" name="linkedin_link"
                                    value="{{ $setting['linkedin_link'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="instagram_link" class="form-label">Instagram Link</label>
                                <input type="text" class="form-control" id="instagram_link" name="instagram_link"
                                    value="{{ $setting['instagram_link'] ?? '' }}">
                            </div>

                            <!-- Site Maintenance Mode -->
                            <div class="mb-3">
                                <label for="maintenance_mode" class="form-label">Maintenance Mode</label>
                                <select class="form-select" id="maintenance_mode" name="maintenance_mode">
                                    <option value="0"
                                        {{ ($setting['maintenance_mode'] ?? '0') == '0' ? 'selected' : '' }}>Off
                                    </option>
                                    <option value="1"
                                        {{ ($setting['maintenance_mode'] ?? '0') == '1' ? 'selected' : '' }}>On
                                    </option>
                                </select>
                            </div>

                            <!-- Maintenance Mode Text -->
                            <div class="mb-3">
                                <label for="maintenance_mode_text" class="form-label">Maintenance Mode Text</label>
                                <textarea class="form-control" id="maintenance_mode_text" name="maintenance_mode_text">{{ $setting['maintenance_mode_text'] ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="site_copyright" class="form-label">Copyright</label>
                                <input type="text" class="form-control" id="site_copyright" name="site_copyright"
                                    value="{{ $setting['site_copyright'] ?? '' }}">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Save Settings</button>


                        </form>
                    </div>

                </div>
            </div>
        @endsection

        {{--  @push('scripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    pageLength: 5,
                    lengthMenu: [
                        [5, 10, 25, 50, 100],
                        [5, 10, 25, 50, 100]
                    ]
                });
            });
        </script>
    @endpush  --}}
