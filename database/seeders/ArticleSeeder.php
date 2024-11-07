<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $interactiveMultimediaImages = [
            'assets/hci.jpg',
            'assets/immersiveTech.jpeg',
            'assets/ux.png',
        ];

        $softwareEngineeringImages = [
            'assets/agile.png',
            'assets/codeReeng.jpg',
            'assets/psd.png',
        ];
        
        for($i = 0; $i < 10; $i++){
            $categoryName = $faker->randomElement(['Interactive Multimedia', 'Software Engineering']);

            $image = $categoryName === 'Interactive Multimedia'
                ? $faker->randomElement($interactiveMultimediaImages)
                : $faker->randomElement($softwareEngineeringImages);

            DB::table('articles')->insert([
                'WriterID' => $faker->numberBetween(1,9),
                'CategoryName' => $categoryName,
                'ArticleName' => $faker->sentence(6),
                'ArticleContent' => $faker->paragraph(),
                'ArticleDate' => $faker->dateTimeBetween('2023-01-01', '2024-12-31'),
                'ArticleImage' => $image,
            ]);
        }
    }
}
