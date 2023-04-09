<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Product::create([
            "name" => "makanan",
            "decription" => $faker->sentence(8),
            "stock" => $faker->numerify('##'),
            // "image" => 'C:\xampp\htdocs\Tugas-CMS\public\storage\product-image'
            "image" => "product-images/contoh-image.png",
            "category_id" => 1,
        ]);

        $faker = Faker::create('id_ID');
        Product::create([
            "name" => "makanan",
            "decription" => $faker->sentence(8),
            "stock" => $faker->numerify('##'),
            // "image" => 'C:\xampp\htdocs\Tugas-CMS\public\storage\product-image'
            "image" => "product-images/contoh-image.png",
            "category_id" => 1,
        ]);

        $faker = Faker::create('id_ID');
        Product::create([
            "name" => "makanan",
            "decription" => $faker->sentence(8),
            "stock" => $faker->numerify('##'),
            // "image" => 'C:\xampp\htdocs\Tugas-CMS\public\storage\product-image'
            "image" => "product-images/contoh-image.png",
            "category_id" => 1,
        ]);

        $faker = Faker::create('id_ID');
        Product::create([
            "name" => "makanan",
            "decription" => $faker->sentence(8),
            "stock" => $faker->numerify('##'),
            // "image" => 'C:\xampp\htdocs\Tugas-CMS\public\storage\product-image'
            "image" => "product-images/contoh-image.png",
            "category_id" => 1,
        ]);
    }
}
