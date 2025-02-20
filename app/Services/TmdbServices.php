<?php

namespace App\Services;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class TmdbServices
{
    public $tmdb_key;
    public function __construct()
    {
        $this->tmdb_key = env("TMDB_API_KEY");
    }

    public function tmbdDetails($movies)
    {

        $response =  HTTP::pool(function (Pool $pool) use ($movies) {
            foreach ($movies as $movie) {
                $response = $pool->withToken($this->tmdb_key)
                    ->withUrlParameters([
                        'endpoint' => 'https://api.themoviedb.org/3/search/movie?query=',
                        'search' => $movie,
                    ])->get('{+endpoint}{search}');
            }
        });

        $movieExplicit = [
            $response[1]->collect("results")[0],
            $response[2]->collect("results")[0],
            $response[3]->collect("results")[0],
            $response[0]->collect("results")[0],
            $response[4]->collect("results")[0]
        ];
        
        return $movieExplicit;
    }
}
