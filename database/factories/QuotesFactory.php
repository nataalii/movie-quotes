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
            'quote' => $this->faker->text($maxNbChars = 30)
        ];
    }
}
