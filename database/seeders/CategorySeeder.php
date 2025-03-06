<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'বাংলাদেশী উৎসব',  // Bangladeshi Festivals
                'user_id' => 1,
            ],
            [
                'name' => 'সাংস্কৃতিক অনুষ্ঠান',  // Cultural Events
                'user_id' => 1,
            ],
            [
                'name' => 'খাবার উৎসব',  // Food Festival
                'user_id' => 1,
            ],
            [
                'name' => 'প্রযুক্তি সম্মেলন',  // Tech Conference
                'user_id' => 1,
            ],
            [
                'name' => 'ক্রীড়া ইভেন্ট',  // Sports Event
                'user_id' => 1,
            ],
            [
                'name' => 'Business Summit',
                'user_id' => 1,
            ],
        ]);
    }
} 