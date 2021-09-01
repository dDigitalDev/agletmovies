<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Componere\Method;

class ViewMoviesTest extends TestCase
{
    public function app_shows_movies_from_api()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' =>$this->fakePopularMovies(),

        ]);

        $response = $this->get(route('/'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
    }

    private function fakePopularMovies()
    {
        return Http::response([
           'results'=>[
               [
               "popularity" => 406.667,
               "vote_count" => 2607,
               "video" => false,
               "poster_path" => "https://xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg/",
               "id" => 419706,
               "adult" => false,
               "backdrop_path" => "https://5BwqwxMEjeFtdknRV925vo8K1v.jpg/",
               "original_language" => "en",
               "original_tittle" =>"Fake Movie",
               "title" => "Fake Movie",
               "vote_average" => 6,
               "overview" => "Fake Movie description. good damn only if i had full potential of this project id be part of the team #Aglet",
               "release_date" => "2019-09-17",

               ]
           ]
         ], 200);
    }
}
