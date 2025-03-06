<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstName' => 'Admin',
                'lastName' => 'User',
                'email' => 'admin@example.com',
                'mobile' => '01711111111',
                'password' => Hash::make('password123'),
                'otp' => '123456',
            ],
            [
                'firstName' => 'Kamal',
                'lastName' => 'Hassan',
                'email' => 'kamal@example.com',
                'mobile' => '01722222222',
                'password' => Hash::make('password123'),
                'otp' => '123456',
            ],
            [
                'firstName' => 'Nusrat',
                'lastName' => 'Jahan',
                'email' => 'nusrat@example.com',
                'mobile' => '01733333333',
                'password' => Hash::make('password123'),
                'otp' => '123456',
            ]
        ]);
    }
} 