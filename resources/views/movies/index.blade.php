@extends('layouts.app')

@section('content')

<div class="indexTitle">Popular Downloads</div>
  <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            @if(count($movies) > 0)
                @foreach($movies as $movie)

                <div class="swiper-slide">
                    <a href="/movies/{{$movie->id}}">
                        <div class="imgBx">
                            <img src="{{$movie->image}}" alt="s1">
                        </div>
                        <div class="details">
                            {{$movie->title}}<br>
                            {{$movie->year}}
                        </div>
                    </a>
                </div>            
 
            @endforeach
          
        </div>
            <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>


        @else 

        <p>No Posts Found.</p>
     
        @endif


<div class="indexTitle">Latest Movies</div>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">

    @if(count($movies) > 0)
                @foreach($movies as $movie)

                <div class="swiper-slide">
                    <a href="/movies/{{$movie->id}}">
                        <div class="imgBx">
                            <img src="{{$movie->image}}" alt="s1">
                        </div>
                        <div class="details">
                            {{$movie->title}}<br>
                            {{$movie->year}}
                        </div>
                    </a>
                </div>            
 
            @endforeach
     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

@else 

<p>No Posts Found.</p>

@endif

   
@endsection      


