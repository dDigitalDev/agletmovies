@extends('layouts.app')

@section('content')

<div class="movie_card" id="bright">
 
 @foreach($popularMovies as $key $movie)
     
     <div class="info_section">
      <div class="movie_header">
        <img class="locandina" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster"/>
        <h1> {{ $movie->title }}</h1>
        <h4>{{ \Carbon::parse($movie->release_date)->format{'M D, Y'} }}</h4>
        <p class="type">{{ $movie->genre_id }}</p>
      </div>
      <div class="movie_desc">
        <p class="text">
          {{ $movie->overview}}
        </p>
      </div>
      @if(Auth::user())
            @if(Auth::user()->movies->contains('movie_id',$movie->id) == 1)
      <div class="movie_social">
        <ul>
          <li><i class="material-icons" href="/favourite">****Favourite*****</i></li>
        </ul>
      </div>
        @else
    <div class="blur_back bright_back">
    <ul>
      <li><i class="material-icons" href="/addfavourite/{{ $movie->id }}">Add to favourite</i></li>
    </ul>
    </div>
    @endif
        @else
    <div class="blur_back bright_back">
    <ul>
      <li><i class="material-icons" href="/addfavourite/{{ $movie->id }}">Add to favourite</i></li>
    </ul>
    </div>
       @endif
    @endforeach
  </div>


@endsection
