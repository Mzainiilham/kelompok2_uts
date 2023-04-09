<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('id_ID');
        Category::create([
            "name" => "makanan",
            "decription" => $faker->sentence(8),
        ]);

        $faker = Faker::create('id_ID');
        Category::create([
            "name" => "minuman",
            "decription" => $faker->sentence(8),
        ]);
    }
}
