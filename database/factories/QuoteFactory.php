<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
	public function definition()
	{
		return [
			'image'       => $this->faker->imageUrl(700, 480, 'movies', true),
		];
	}
}
