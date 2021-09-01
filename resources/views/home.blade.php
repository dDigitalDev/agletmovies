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
           <p class="type">{{$Movie['popularity']}}</p>
        </div>

      <div class="movie_desc">
        <p class="text">
          {{$Movie['overview']}}
        </p>
      </div>
      @if(Auth::user())
      @if(Auth::user()->movies->contains('movie_id',$Movie['id']) == 1)
      <div class="movie_social">
        <ul>

          <li><i class="material-icons"><button class="fa fa-star checked"></button></i></li>
        </ul>
      </div>
      @else
      <div class="material-icons"><button type="button" class="fa fa-star">
          <a href="/addfavourite/{{ $Movie['id'] }}">Add to Fav</a>
      </div>
      @endif
  @else
  <div class="material-icons"><button type="button" class="fa fa star">
      <a href="/addfavourite/{{ $Movie['id'] }}">Add to Fav</a>
  </div>
  @endif

    </div>
    <div class="blur_back bright_back"><a href="#"> <img  src="{{ 'https://image.tmdb.org/t/p/w500/'.$Movie['backdrop_path'] }}"></a></div>
  </div>
    @endforeach


@endsection
