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
        $movie1 = Movies::factory()->create();
        $movie2 = Movies::factory()->create();
        $movie3 = Movies::factory()->create();
        
        Quotes::factory(5)->create([
            'movie_id' => $movie1->id
        ]);
                
        Quotes::factory(5)->create([
            'movie_id' => $movie2->id
        ]);

        Quotes::factory(5)->create([
            'movie_id' => $movie3->id
        ]);

    }
}
