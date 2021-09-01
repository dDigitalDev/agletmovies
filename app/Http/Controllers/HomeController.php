<?php

namespace App\Http\Controllers;


use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Movie;
use App\Models\UserMovies;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        $movies = DB::table('movies')->get();
        return view('home', ['movies' => $movies]);
    }*/

    public function favourite()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
       ->get ('https://api.themoviedb.org/3/movie/popular')
       ->json()['results'];

       dump($popularMovies);

       return view('pages.favourite',[
           'popularMovies' => $popularMovies,

       ]);
    }

    public function removefavourite($movie_id)
    {
        $res=UserMovies::find($movie_id)->delete();
        return redirect()->to('/favourite');
    }

    public function addfavourite($movie_id)
    {
        $user = User::find(auth()->user()->id);
        $results = $user->movies()->save(new UserMovies(array(
            'user_id' => $user->id,
            'movie_id' => $movie_id
        )));
        return redirect()->to('/favourite');
    }
}
