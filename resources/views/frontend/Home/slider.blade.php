@foreach ($sliders as $slider)
    <div class="single-slider" style="background-image: url('{{ asset('storage/' . $slider->image_link) }}');">

        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <br>
                        <h1>
                             {{ $slider->first_headingBlack }}
                             <span>
                                {{ $slider->first_headingBlue }}
                            </span>
                            
                         {{ $slider->second_headingBlack }}
                         <span>
                            {{ $slider->second_headingBlue }}
                        </span>
                        </h1>

                        <p> {{ $slider->mini_para }} </p>
                        <div class="button">
                            <a href=" {{ $slider->more_infoLink }}" class="btn">Get Appointment</a>
                            <a href=" {{ $slider->more_infoLink }}" class="btn primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
