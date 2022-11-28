<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$movie1 = Movie::create([
			'title' => [
				'en' => 'Inception',
				'ka' => 'დასაწყისი',
			],
		]);

		$movie2 = Movie::create([
			'title' => [
				'en' => 'Guardians of the Galaxy',
				'ka' => 'გალაკტიკის მცველები',
			],
		]);

		$movie3 = Movie::create([
			'title' => [
				'en' => 'Interstellar',
				'ka' => 'ინტერსტელარი',
			],
		]);

		$movie4 = Movie::create([
			'title' => [
				'en' => 'Fight Club',
				'ka' => 'მებრძოლთა კლუბი',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => [
				'en' => 'you don’t believe in one reality',
				'ka' => 'უკვე აღარ გჯერა ერთი რეალობის',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => 'I am Groot.',
				'ka' => 'მე გრუტი ვარ',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => 'I don’t learn. One of my issues.',
				'ka' => 'შეცდომებზე ვერ ვსწავლობ',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'I have an itch, heading back to base',
				'ka' => 'მოუთბენლად ველი უკან დაბრუნებას',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'Love transcends time and space',
				'ka' => 'სიყვარულს მანძილის გადალახვა შეუძლია',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => [
				'en' => 'Without pain, we would have nothing',
				'ka' => 'ტკივილის გარეშე არაფერი გვექნებოდა',
			],
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => [
				'en' => "You mustn't be afraid to dream big",
				'ka' => 'არ გეშინოდეს დიდი ოცნებების',
			],
		]);
	}
}
