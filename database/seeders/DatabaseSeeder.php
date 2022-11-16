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
           "title" => "Inception",
       ]);
 
       $movie2 = Movies::create([
           "title" => "Guardians of the Galaxy",
       ]);
 
       $movie3 = Movies::create([
           "title" => "Interstellar",
       ]);
 
       $movie4 = Movies::create([
           "title" => "Fight Club",
       ]);
 
      
       Quotes::create([
           'image' => 'images/Inception_1658036420.jpg',
           'quote' => "You mustn't be afraid to dream bigger.",
           'movie_id' => $movie1->id
       ]);
 
       Quotes::create([
           'image' => 'images/inception.jpg',
           'quote' => "you don’t believe in one reality anymore.",
           'movie_id' => $movie1->id
       ]);
              
       Quotes::create([
           'image' => 'images/baby-groot.jpg',
           'quote' => 'I am Groot',
           'movie_id' => $movie2->id       
       ]);
 
 
       Quotes::create([
           'image' => 'images/interstellar.jpeg',
           'quote' => 'I have an itch, heading back to base.',
           'movie_id' => $movie3->id       
       ]);
 
       Quotes::create([
           'image' => 'images/interstellar-2.jpg',
           'quote' => 'Love transcends time and space',
           'movie_id' => $movie3->id       
       ]);
 
       Quotes::create([
           'image' => 'images/fight-club.jpg',
           'quote' => 'Without pain, we would have nothing.',
           'movie_id' => $movie4->id       
       ]);
 
 
   }
}
