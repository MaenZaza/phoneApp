<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    public function run()
    {
        DB::table('phones')->insert([
            ['brand' => 'Apple', 'model' => 'iPhone 13', 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'Samsung', 'model' => 'Galaxy S21', 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'Google', 'model' => 'Pixel 6', 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'OnePlus', 'model' => 'OnePlus 9', 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'Xiaomi', 'model' => 'Mi 11', 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
