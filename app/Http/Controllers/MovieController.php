<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\MovieResource;
use Exception;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\type;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MovieResource::collection(Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        try {
            if ($request->validated()) {
                $userResponse = $request->all();
                $userPrompt = $request->all("told")["told"];
                $mood = $request->all("mood")["mood"];
                $genre = $request->all("genre")["genre"];

                $userSays = $userPrompt . " as well as , right now my mood is " . $mood . ", i like genre of " . $genre . " , give me only 5 movie name by my preference, no additional info is required , your answer will be straight 5 movie name by numbering order";

                $Groq_key = env("GROQ_API_KEY");

                $aiPrompt = [
                    "messages" => [
                        [
                            "role" => "user",
                            "content" => $userSays
                        ]
                    ],
                    "model" => "llama-3.3-70b-versatile"
                ];

                // return new MovieResource($request);
                $response = Http::withToken($Groq_key)->post("https://api.groq.com/openai/v1/chat/completions", $aiPrompt);
                $groq_response = $response->json("choices")[0]["message"]["content"];
                dd($groq_response);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
