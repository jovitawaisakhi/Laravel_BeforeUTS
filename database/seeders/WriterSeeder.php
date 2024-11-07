<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $images = [
            "assets/writer1.jpg",
            "assets/writer2.jpeg",
            "assets/writer3.jpg",
        ];

        for ($i = 0; $i < 9; $i++) {
            DB::table('writers')->insert([
                'WriterName' => $faker->name,
                'WriterSpesialis' => $faker->jobTitle,
                'WriterImage' => $images[array_rand($images)],
            ]);
        }
    }
}
