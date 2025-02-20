<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this['original_title'],
            "year" => $this['release_date'],
            "plot" => $this['overview'],
            "genre" => $this['null'] ?? '',
            "ratings" => $this['vote_average'],
            "poster" => "https://image.tmdb.org/t/p/original" . $this['poster_path']
        ];
    }
}
