<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;

class GroqServices
{
    public $groq_key;

    public function __construct()
    {
        $this->groq_key = env("GROQ_API_KEY");
    }

    public function SendData($userPrompt, $mood, $genre)
    {
        try {
            $userSays = $userPrompt . " as well as , right now my mood is " . $mood . ", i like genre of " . $genre . " , give me only 5 movie name by my preference, no additional info is required , your answer will be straight 5 movie name by numbering order";

            $aiPrompt = [
                "messages" => [
                    [
                        "role" => "user",
                        "content" => $userSays
                    ]
                ],
                "model" => "llama-3.3-70b-versatile"
            ];

            $response = Http::withToken($this->groq_key)->post("https://api.groq.com/openai/v1/chat/completions", $aiPrompt);
            $groq_response = $response->json("choices")[0]["message"]["content"];

            return $this->SimplifyData($groq_response);
        } catch (\Throwable $th) {
            return null;
            // dd("Groq Api Error", $th->getMessage());
        }
    }

    public function SimplifyData($groqData)
    {

        //numbered movie list
        $Nmovies = explode("\n", $groqData);

        //regexp -> only movie name to array
        $onlyMoviesName =  array_map(function ($movie) {
            return preg_replace("/^\d+\.\s*/", "", $movie);
        }, $Nmovies);

        return $onlyMoviesName;
    }
}
