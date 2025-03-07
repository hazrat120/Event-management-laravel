<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeakerSeeder extends Seeder
{
    public function run()
    {
        DB::table('speakers')->insert([
            [
                'name' => 'Dr. Muhammed Zafar Iqbal',
                'bio' => 'Renowned Bangladeshi author and technology expert',
                'contact' => '01711000001',
                'image' => 'zafar_iqbal.jpg',
            ],
            [
                'name' => 'Mustafa Jabbar',
                'bio' => 'Technology expert and former ICT Minister',
                'contact' => '01711000002',
                'image' => 'mustafa_jabbar.jpg',
            ],
            [
                'name' => 'Ayman Sadiq',
                'bio' => 'Founder of 10 Minute School',
                'contact' => '01711000003',
                'image' => 'ayman_sadiq.jpg',
            ],
        ]);
    }
}
