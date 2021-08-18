@extends('layouts.app')

@section('content')



    @foreach ($popularMovies as $Movie)
    <div class="movie_card" id="bright">
        <div class="info_section">

        <div class="movie_header">
            <a href="#"> <img  src="{{ 'https://image.tmdb.org/t/p/w120/'.$Movie['poster_path'] }}" class="locandina"></a>
            <a href="#"> <img  src="{{ 'https://image.tmdb.org/t/p/w120/'.$Movie['backdrop_path'] }}" alt="poster" class="bright_back"></a>
           <h1>{{$Movie['title']}}</h1>
           <h4>{{$Movie['release_date']}}</h4>
           <span class="minutes">{{$Movie['vote_count']}}</span>
           <p class="type">Action, Crime, Fantasy</p>
        </div>

      <div class="movie_desc">
        <p class="text">
          {{$Movie['overview']}}
        </p>
      </div>

      <div class="movie_social">
        <ul>
          <li><i class="material-icons"></i></li>
          <li><i class="material-icons"><button type="button" class="btn btn-success">Add to Fav</button></i></li>
        </ul>
      </div>

    </div>
    <div class="blur_back bright_back"></div>
  </div>
    @endforeach


@endsection
