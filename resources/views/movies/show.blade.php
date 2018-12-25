@extends ('layouts.app')

@section('content')



<div class="showMovieWrapper">
    <div class="showMovieGrid">
    
        <div class="showMovieImage">
            <img src="{{$movie->image}}" id="showMovieImg" alt="smi">
        </div>

        <div class="shoWMovieTitle">{{$movie->title}}</div>
        <div class="shoWMovieYear">{{$movie->year}}</div>
        <div class="shoWMovieDescription">{{$movie->description}}</div>


        <div class="showMovieSidebar">
            <p>Similar movies</p>

            <div id="imgBlock">
             <img src="{{$movie->image}}" id="showMovieSidebarImg" alt="smi">
            </div>
            <div id="imgBlock">
             <img src="{{$movie->image}}" id="showMovieSidebarImg" alt="smi">
            </div>
            <div id="imgBlock">
             <img src="{{$movie->image}}" id="showMovieSidebarImg" alt="smi">
            </div>
            <div id="imgBlock">
             <img src="{{$movie->image}}" id="showMovieSidebarImg" alt="smi">
            </div>
        </div>


        <div class="showMovieButton">
            <div class="button"><i class="fas fa-download"></i>Download</div>
        </div>  
        <div class="showMovieTrailer">

            <div id="showMovieTrailer1">
               <img src="{{$movie->image}}" id="showMovieTrailerImg" alt="smt1">
            </div>

            <div id="showMovieTrailer2">
                <img src="{{$movie->image}}" id="showMovieTrailerImg" alt="smt2">
            </div>

            <div id="showMovieTrailer3">
                <img src="{{$movie->image}}" id="showMovieTrailerImg" alt="smt3">
            </div>
        </div>

    </div>
</div>

@endsection