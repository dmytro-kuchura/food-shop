<?php

namespace Database\Seeders;

use Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CatalogProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 350; $i++) {
            $faker = Faker\Factory::create();

            DB::table('catalog_products')->insert([
                'name' => $faker->sentence(rand(3, 9)),
                'alias' => strtolower(str_replace([' ', '.'], ['_', ''], $faker->sentence(rand(3, 9)))),
                'category_id' => rand(0, 1),
                'status' => 'ACTIVE',
                'new' => false,
                'sale' => false,
                'available' => true,
                'cost' => rand(150.77, 17777.95),
                'cost_old' => rand(10560.70, 53777.95),
                'views' => rand(0, 1000),
                'stock_keeping_unit' => $faker->swiftBicNumber,
                'image' => $faker->imageUrl(),
                'title' => $faker->sentence(rand(3, 9)),
                'description' => $faker->sentence(),
                'keywords' => $faker->sentence(),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
