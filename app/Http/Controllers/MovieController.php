<?php

namespace App\Http\Controllers;

use App\ErrorTrait;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\MovieResource;
use App\Services\GroqServices;
use App\Services\TmdbServices;
use Exception;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\returnSelf;

class MovieController extends Controller
{
    use ErrorTrait;
    /**
     * Display a listing of the movie resource.
     */
    public function index()
    {
        return MovieResource::collection(Movie::all());
    }

    /**
     * Making a post request to api
     */
    public function store(StoreMovieRequest $request, GroqServices $groqService, TmdbServices $tmdb)
    {
        if ($request->validated()) {
            $movies = [];
            $groqData =  $groqService->SendData(
                $request->input("told"),
                $request->input("mood"),
                $request->input("genre")
            );

            if (!$groqData) {
                $this->ErrorTrait("Groq Request Failed", 500);
            }

            $movies = $groqData;
            $tmdbResults = $tmdb->tmbdDetails($movies);
            return MovieResource::collection($tmdbResults);
        }
    }

}
