<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         $this->call(CatalogProductsTableSeeder::class);
//         $this->call(NewsTableSeeder::class);
//         $this->call(SystemPagesTableSeeder::class);
         $this->call(SpecificationsTableSeeder::class);
         $this->call(SpecificationValuesTableSeeder::class);
    }
}
