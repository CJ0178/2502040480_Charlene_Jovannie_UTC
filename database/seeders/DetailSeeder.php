<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create("id_ID");
        $bookid = Book::pluck("id");
        $CountId = count($bookid);
        for ($i=0; $i < $CountId; $i++) {
            Detail::create([
                "book_id" => $bookid[$i],
                "description" => $faker->paragraph(),
                "author" => $faker->name(),
                "date" => $faker->date()
            ]);
        }
    }
}
