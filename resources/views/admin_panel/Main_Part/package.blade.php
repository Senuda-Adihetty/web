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
                        Add New Package
                    </button>

                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Bottom Area-->


    {{--  begin Modal  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">
                        Add New Package
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <form method="POST" action="/slideSave" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        {{--  First Line Black Part  --}}
                        <div class="mb-3">
                            <label for="first_headingBlack" class="form-label">
                                First Line Black Part
                            </label>
                            <input type="text" class="form-control" name="first_headingBlack"
                                id="first_headingBlack">
                            {{--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>  --}}
                        </div>

                        {{--  First Line Blue Part  --}}
                        <div class="mb-3">
                            <label for="first_headingBlue" class="form-label">
                                First Line Blue Part
                            </label>
                            <input type="text" class="form-control" name="first_headingBlue" id="first_headingBlue">
                        </div>

                        {{--  Second Line Black Part  --}}
                        <div class="mb-3">
                            <label for="second_headingBlack" class="form-label">
                                Second Line Black Part
                            </label>
                            <input type="text" class="form-control" name="second_headingBlack"
                                id="second_headingBlack">
                        </div>

                        {{--  Second Line Blue Part  --}}
                        <div class="mb-3">
                            <label for="second_headingBlue" class="form-label">
                                Second Line Blue Part
                            </label>
                            <input type="text" class="form-control" name="second_headingBlue"
                                id="second_headingBlue">
                        </div>

                        {{--  Mini Paragraph  --}}
                        <div class="mb-3">
                            <label for="mini_para" class="form-label">
                                Mini Paragraph
                            </label>
                            <textarea class="form-control" id="mini_para" name="mini_para" rows="3"></textarea>
                        </div>

                        {{--  Upload Slide Photo  --}}
                        <div class="mb-3">
                            <label for="image_link" class="form-label">
                                Upload Slide Photo
                            </label>
                            <input type="file" class="form-control" name="image_link" id="image_link">
                        </div>

                        {{--  Button 1 Link  --}}
                        <div class="mb-3">
                            <label for="more_infoLink" class="form-label">
                                Button 1 Link
                            </label>
                            <input type="text" class="form-control" name="more_infoLink" id="more_infoLink">
                        </div>

                        {{--  Button 2 Link  --}}
                        <div class="mb-3">
                            <label for="more_infoLink2" class="form-label">
                                Button 2 Link
                            </label>
                            <input type="text" class="form-control" name="more_infoLink2" id="more_infoLink2">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Slider</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{--  end Modal  --}}



    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mb-0">Slide Custom Area</h3>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->

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

                    <h3 class="card-title">Bordered Table</h3>
                </div>
                {{--  <div class="card-header">
                        h
                    </div>  --}}

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th style="width: 10px">#</th>
                                <th>First Black Heading</th>
                                <th>First Blue Heading</th>
                                <th>Second Black Heading</th>
                                <th>Second Blue Heading</th>
                                <th>Paragraph</th>
                                <th>Slide Image</th>
                                <th>Button 1</th>
                                <th>Button 2</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($sliders as $slider)
                                <tr class="align-middle">

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->id }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->first_headingBlack }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->first_headingBlue }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->second_headingBlack }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->second_headingBlue }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->mini_para }}
                                    </td>

                                    <td>
                                        <img width="100" src="{{ asset('storage/' . $slider->image_link) }}"
                                            alt="">
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->more_infoLink }}
                                    </td>

                                    <td class="text-wrap" style="white-space: normal; max-width: 250px;">
                                        {{ $slider->more_infoLink2 }}
                                    </td>

                                    <td>

                                        {{--  Button trigger modal  --}}
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#slidermodal{{ $slider->id }}">
                                            Edit
                                        </button>

                                        {{--  <a href="/slideDelete/{{ $slider->id }}"
                                                class="btn btn-danger">Delete</a>  --}}
                                        <a href="{{ route('slider.delete', $slider->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this slide?')"
                                            class="btn btn-danger">
                                            Delete
                                        </a>


                                    </td>
                                </tr>

                                {{--  begin Modal for Edit Button --}}

                                <div class="modal fade" id="slidermodal{{ $slider->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Slide</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>


                                            <form method="POST" action="/slideIndex/{{ $slider->id }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                {{--  <input type="hidden" name="slider_id" value="{{ $slider->id }}">  --}}

                                                <div class="modal-body">
                                                    <div class="card card-info card-outline mb-0">
                                                        <div class="card-header">
                                                            <h3 class="card-title"></h3>
                                                        </div>

                                                        <div class="card-body">
                                                            {{--  First Line Black Part  --}}
                                                            <div class="mb-3">
                                                                <label for="first_headingBlack" class="form-label">
                                                                    First Line Black Part
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="first_headingBlack" id="first_headingBlack"
                                                                    value="{{ $slider->first_headingBlack }}">
                                                                {{--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>  --}}
                                                            </div>

                                                            {{--  First Line Blue Part  --}}
                                                            <div class="mb-3">
                                                                <label for="first_headingBlue" class="form-label">
                                                                    First Line Blue Part
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="first_headingBlue" id="first_headingBlue"
                                                                    value="{{ $slider->first_headingBlue }}">
                                                            </div>

                                                            {{--  Second Line Black Part  --}}
                                                            <div class="mb-3">
                                                                <label for="second_headingBlack" class="form-label">
                                                                    Second Line Black Part
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="second_headingBlack"
                                                                    id="second_headingBlack"
                                                                    value="{{ $slider->second_headingBlack }}">
                                                            </div>

                                                            {{--  Second Line Blue Part  --}}
                                                            <div class="mb-3">
                                                                <label for="second_headingBlue" class="form-label">
                                                                    Second Line Blue Part
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="second_headingBlue" id="second_headingBlue"
                                                                    value="{{ $slider->second_headingBlue }}">
                                                            </div>

                                                            {{--  Mini Paragraph  --}}
                                                            <div class="mb-3">
                                                                <label for="mini_para" class="form-label">
                                                                    Mini Paragraph
                                                                </label>
                                                                <textarea class="form-control" id="mini_para" name="mini_para" rows="3">{{ $slider->mini_para }}</textarea>
                                                            </div>

                                                            {{--  Preview Old Slide Photo  --}}

                                                            @if ($slider->image_link)
                                                                <div class="mb-3">
                                                                    <label class="form-label">Current Slide
                                                                        Photo</label><br>
                                                                    <img src="{{ asset('storage/' . $slider->image_link) }}"
                                                                        alt="Slide Image" width="150">
                                                                </div>
                                                            @endif

                                                            {{--  Upload New Slide Photo  --}}
                                                            <div class="mb-3">
                                                                <label for="image_link" class="form-label">
                                                                    Upload New Slide Photo
                                                                </label>
                                                                <input type="file" class="form-control"
                                                                    name="image_link" id="image_link">
                                                            </div>

                                                            {{--  Button 1 Link  --}}
                                                            <div class="mb-3">
                                                                <label for="more_infoLink" class="form-label">
                                                                    Button 1 Link
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="more_infoLink" id="more_infoLink"
                                                                    value="{{ $slider->more_infoLink }}">
                                                            </div>

                                                            {{--  Button 2 Link  --}}
                                                            <div class="mb-3">
                                                                <label for="more_infoLink2" class="form-label">
                                                                    Button 2 Link
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="more_infoLink2" id="more_infoLink2"
                                                                    value="{{ $slider->more_infoLink2 }}">
                                                            </div>

                                                            </>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update
                                                                    Slider</button>
                                                            </div>

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
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
        {{--  end table  --}}


    </div>
    <!--end::Container-->
    </div>
    <!--end::App Content Header-->
