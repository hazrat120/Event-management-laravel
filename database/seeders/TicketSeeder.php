<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'event_id' => 1,
                'price' => 1500.00,
                'type' => 'Regular',
                'available_quantity' => 500,
                'image' => 'regular_ticket.jpg',
            ],
            [
                'event_id' => 1,
                'price' => 3000.00,
                'type' => 'VIP',
                'available_quantity' => 100,
                'image' => 'vip_ticket.jpg',
            ],
            [
                'event_id' => 2,
                'price' => 500.00,
                'type' => 'Standard',
                'available_quantity' => 1000,
                'image' => 'standard_ticket.jpg',
            ],
        ]);
    }
}
