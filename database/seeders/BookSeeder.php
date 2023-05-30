<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create("id_ID");

        for ($i=0; $i < 8; $i++) {
            $duration = mt_rand(0,10);
            if ($duration < 5) {
                Book::create([
                    "image" => $faker->imageUrl(640, 480, 'books', true),
                    "title" => $faker->sentence(),
                    "reading_time" => "Quicks Reads"
                ]);
            } elseif ($duration >= 5 && $duration <=7) {
                Book::create([
                    "image" => $faker->imageUrl(640, 480, 'books', true),
                    "title" => $faker->sentence(),
                    "reading_time" => "Medium Reads"
                ]);
            } else {
                Book::create([
                    "image" => $faker->imageUrl(640, 480, 'books', true),
                    "title" => $faker->sentence(),
                    "reading_time" => "Long Reads"
                ]);
            }
        }
    }
}
