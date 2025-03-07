<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationSeeder extends Seeder
{
    public function run()
    {
        DB::table('registrations')->insert([
            [
                'date' => '2024-05-01',
                'name' => 'Kamal Hassan',
                'mobile' => '01911223344',
                'email' => 'kamal.hassan@gmail.com',
                'remark' => 'Regular ticket',
                'event_id' => 1,
                'user_id' => 1,
            ],
            [
                'date' => '2024-04-10',
                'name' => 'Sabina Yasmin',
                'mobile' => '01811223355',
                'email' => 'sabina.yasmin@gmail.com',
                'remark' => 'VIP ticket',
                'event_id' => 2,
                'user_id' => 2,
            ],
        ]);
    }
}

