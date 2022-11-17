<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movies;
use App\Models\Quotes;
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
		$movie1 = Movies::create([
			'title' => [
				'en' => 'Inception',
				'ka' => 'დასაწყისი',
			],
		]);

		$movie2 = Movies::create([
			'title' => [
				'en' => 'Guardians of the Galaxy',
				'ka' => 'გალაკტიკის მცველები',
			],
		]);

		$movie3 = Movies::create([
			'title' => [
				'en' => 'Interstellar',
				'ka' => 'ინტერსტელარი',
			],
		]);

		$movie4 = Movies::create([
			'title' => [
				'en' => 'Fight Club',
				'ka' => 'მებრძოლთა კლუბი',
			],
		]);

		Quotes::create([
			'image'    => 'images/Inception_1658036420.jpg',
			'movie_id' => $movie1->id,
			'quote'    => [
				'en' => "You mustn't be afraid to dream big",
				'ka' => 'არ გეშინოდეს დიდი ოცნებების',
			],
		]);

		Quotes::create([
			'image'    => 'images/inception.jpg',
			'movie_id' => $movie1->id,
			'quote'    => [
				'en' => 'you don’t believe in one reality',
				'ka' => 'უკვე აღარ გჯერა ერთი რეალობის',
			],
		]);

		Quotes::create([
			'image'    => 'images/baby-groot.jpg',
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => 'I am Groot.',
				'ka' => 'მე გრუტი ვარ',
			],
		]);

		Quotes::create([
			'image'    => 'images/guardians.jpg',
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => 'I don’t learn. One of my issues.',
				'ka' => 'შეცდომებზე ვერ ვსწავლობ',
			],
		]);

		Quotes::create([
			'image'    => 'images/interstellar.jpeg',
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'I have an itch, heading back to base',
				'ka' => 'მოუთბენლად ველი უკან დაბრუნებას',
			],
		]);

		Quotes::create([
			'image'    => 'images/interstellar-2.jpg',
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'Love transcends time and space',
				'ka' => 'სიყვარულს მანძილის გადალახვა შეუძლია',
			],
		]);

		Quotes::create([
			'image'    => 'images/fight-club.jpg',
			'movie_id' => $movie4->id,
			'quote'    => [
				'en' => 'Without pain, we would have nothing',
				'ka' => 'ტკივილის გარეშე არაფერი გვექნებოდა',
			],
		]);
	}
}
