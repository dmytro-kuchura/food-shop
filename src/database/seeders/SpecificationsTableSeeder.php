<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SpecificationsTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->data() as $value) {
            DB::table('specifications')->insert($value);
        }
    }

    private function data(): array
    {
        return [
            [
                'name' => 'Вага',
                'alias' => 'vaga',
                'type' => 'SIMPLE',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'Призначення',
                'alias' => 'pryznachennya',
                'type' => 'SIMPLE',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];
    }
}


