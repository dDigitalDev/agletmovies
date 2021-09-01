<!-- extends in the layouts folder and the name of the file is (app) app.blade.php -->
@extends('layouts.app')

@section('content')

@foreach ($popularMovies as $Movie)
<div class="movie_card" id="bright">
    <div class="info_section">

    <div class="movie_header">
        <a href="#"> <img  src="{{ 'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path'] }}" class="locandina"></a>

       <h1>{{$Movie['title']}}</h1>
       <h4>{{$Movie['release_date']}}</h4>
       <span class="minutes">{{$Movie['vote_count']}}</span>
    </div>

  <div class="movie_desc">
    <p class="text">
      {{$Movie['overview']}}
    </p>
  </div>

  <div class="movie_social">
    <ul>
      <li><i class="material-icons"><button type="button" class="fa fa-star checked"><a href="/removefavourite/{{ $Movie['id'] }}">Remove from list</button></i></li>
    </ul>
  </div>

</div>
<div class="blur_back bright_back"><a href="#"> <img  src="{{ 'https://image.tmdb.org/t/p/w500/'.$Movie['backdrop_path'] }}"></a></div>
</div>
@endforeach

@endsection
