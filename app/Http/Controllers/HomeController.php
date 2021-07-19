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

    public function addfavourite($movie_id)
    {
        $user = User::find(auth()->user()->id);
        $result = $user->movies()->save(new UserMovies(array(
            'user_id' => $user->id,
            'movie_id' => $movie_id
        )));
        return redirect()->to('/');
    }

    public function favourite()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->Request(
            'GET',
            'https://api.themoviedb.org/3/movie/popular?',
            [
                'query' => [
                    'api_key' => '17b7dc81a821db76a65ce303cd3561d4',
                    'language' => 'en-us'
                ]
            ]
                );
                $body = $response->getBody();
                $data = json_decode($body);
                print_r($data);exit();

                return view('pages.favourite');
    }

    public function removefavourite($movie_id)
    {
        $res=UserMovies::find($movie_id)->delete();
        return redirect()->to('/favourite');
    }
}