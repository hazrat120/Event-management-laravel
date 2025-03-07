<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    public function run()
    {
        DB::table('venues')->insert([
            [
                'name' => 'Bangabandhu International Conference Center',
                'location' => 'Agargaon, Dhaka',
                'capacity' => 2000,
                'image' => 'bicc.jpg',
            ],
            [
                'name' => 'Army Stadium',
                'location' => 'Banani, Dhaka',
                'capacity' => 5000,
                'image' => 'army_stadium.jpg',
            ],
            [
                'name' => 'International Convention City Bashundhara',
                'location' => 'Bashundhara, Dhaka',
                'capacity' => 3000,
                'image' => 'iccb.jpg',
            ],
        ]);
    }
}
