<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mood' => fake()->word(4),
            'genre' => fake()->word(rand()),
            'likemovie' => fake()->word(10),
            'told' => fake()->sentence(10),
        ];
    }
}
