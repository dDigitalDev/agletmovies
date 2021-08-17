<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

                return view('/');
    }
}
