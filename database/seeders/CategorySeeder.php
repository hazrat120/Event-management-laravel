<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Tech Conference',
                'user_id' => 1,
            ],
            [
                'name' => 'Cultural Festival',
                'user_id' => 1,
            ],
            [
                'name' => 'Business Summit',
                'user_id' => 2,
            ],
            [
                'name' => 'Food Festival',
                'user_id' => 2,
            ],
        ]);
    }
}
