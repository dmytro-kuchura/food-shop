<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SystemPagesTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->data() as $value) {
            DB::table('system_pages')->insert($value);
        }
    }

    private function data(): array
    {
        return [
            [
                'slug' => 'main',
                'name' => 'Головна',
                'content' => 'Головна',
                'h1' => 'Головна',
                'title' => 'Головна',
                'keywords' => 'Головна',
                'description' => 'Головна',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'slug' => 'cart',
                'name' => 'Кошик',
                'content' => 'Кошик',
                'h1' => 'Кошик',
                'title' => 'Кошик',
                'keywords' => 'Кошик',
                'description' => 'Кошик',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'slug' => 'news',
                'name' => 'Новини',
                'content' => 'Новини',
                'h1' => 'Новини',
                'title' => 'Новини',
                'keywords' => 'Новини',
                'description' => 'Новини',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'slug' => 'shop',
                'name' => 'Каталог товарів',
                'content' => 'Каталог товарів',
                'h1' => 'Каталог товарів',
                'title' => 'Каталог товарів',
                'keywords' => 'Каталог товарів',
                'description' => 'Каталог товарів',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'slug' => 'checkout',
                'name' => 'Оформлення заказу',
                'content' => 'Оформлення заказу',
                'h1' => 'Оформлення заказу',
                'title' => 'Оформлення заказу',
                'keywords' => 'Оформлення заказу',
                'description' => 'Оформлення заказу',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];
    }
}
