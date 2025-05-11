@foreach ($anousements as $anousment)



                <h4>{{ $anousment->title }}</h4>
                <p>{{ $anousment->description }}</p>
                <a href="{{ $anousment->more_infoLink }}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>



@endforeach

