<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        DB::table('payments')->insert([
            [
                'registration_id' => 1,
                'amount' => 1500.00,
                'payment_status' => 'paid',
                'payment_method' => 'bKash',
                'transaction_id' => 'TRX123456789',
            ],
            [
                'registration_id' => 2,
                'amount' => 3000.00,
                'payment_status' => 'paid',
                'payment_method' => 'Nagad',
                'transaction_id' => 'TRX987654321',
            ],
        ]);
    }
}
