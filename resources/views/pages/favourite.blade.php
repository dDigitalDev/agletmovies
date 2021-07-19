<!-- extends in the layouts folder and the name of the file is (app) app.blade.php -->
@extends('layouts.app')

@section('content')

   <div class="movie_card" id="bright">
    <div class="info_section">
        @foreach($popularMovies as $key => $movie)

      <div class="movie_header">
        <img class="locandina" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster"/>
        <h1> {{ $movie->title }}</h1>
        <h4>{{ \Carbon::parse($movie->release_date)->format{'M D, Y'} }}</h4>
        <p class="type">{{ $movie->genre_ids }}</p>
      </div>

      <div class="movie_desc">
        <p class="text">
          {{ $movie->overview }}
        </p>
      </div>

    <div class="blur_back bright_back">
    <ul>
      <li><i class="material-icons" href="/removefavourite/{{ $movie->usermovies_id }}">Remove from favourite</i></li>
    </ul>
    </div>
    @endforeach
  </div>
   

@endsection
