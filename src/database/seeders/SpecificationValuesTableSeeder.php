<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SpecificationValuesTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->data() as $value) {
            DB::table('specification_values')->insert($value);
        }
    }

    private function data(): array
    {
        return [
            [
                'name' => '140г',
                'alias' => '140g',
                'status' => 'ACTIVE',
                'specification_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => '170г',
                'alias' => '170g',
                'status' => 'ACTIVE',
                'specification_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => '200г',
                'alias' => '200g',
                'status' => 'ACTIVE',
                'specification_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],  [
                'name' => 'Для мʼяса',
                'alias' => 'dlya-miasa',
                'status' => 'ACTIVE',
                'specification_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'Універсальна',
                'alias' => 'universalna',
                'status' => 'ACTIVE',
                'specification_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];
    }
}
