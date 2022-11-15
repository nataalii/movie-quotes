<?php

namespace Database\Factories;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Factories\Factory;


class QuotesFactory extends Factory
{

    public function definition()
    {
        return [
            'movie_id' => Movies::factory(),
            'image' => fake()->image('public/images', 700, 360),
            'quote' => $this->faker->text($maxNbChars = 30)
        ];
    }
}
