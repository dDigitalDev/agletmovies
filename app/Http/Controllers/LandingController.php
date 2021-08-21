<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Movie;
use App\Models\UserMovies;


class LandingController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $popularMovies = Http::withToken(config('services.tmdb.token'))
       ->get ('https://api.themoviedb.org/3/movie/popular')
       ->json('results');

       return view('home',[
           'popularMovies' => $popularMovies,

       ]);
    }

    public function addfavourite($movie_id)
    {
        $user = User::find(auth()->user()->id);
        $result = $user->movies()->save(new UserMovies(array(
            'user_id' => $user->id,
            'movie_id' => $movie_id
        )));
        return redirect()->to('home');
    }
}
