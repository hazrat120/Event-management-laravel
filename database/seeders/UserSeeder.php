<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => 'Hazrat',
                'lastName' => 'Ali',
                'email' => 'hazrat.ali@gmail.com',
                'mobile' => '01711223344',
                'password' => Hash::make('#123456Ali@'),
                'otp' => '123456',
            ],
            [
                'firstName' => 'Md',
                'lastName' => 'Munna',
                'email' => 'md.munna@gmail.com',
                'mobile' => '01811223343',
                'password' => Hash::make('#123456Ali@'),
                'otp' => '123456',
            ],
            [
                'firstName' => 'Rajib',
                'lastName' => 'Hossain',
                'email' => 'rajib.hossain@gmail.com',
                'mobile' => '01811223345',
                'password' => Hash::make('#123456Ali@'),
                'otp' => '123456',
            ],
        ]);
    }
}
