<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'trailer' => '',
            'poster' => 'default.png',
            'release_date' => date('Y-m-d', time() + (7 * 24 * 60 * 60)),
            'genre_id' => rand(1, 5)
        ]);
    }
}
