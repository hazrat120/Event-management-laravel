<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            VenueSeeder::class,
            SpeakerSeeder::class,
            EventSeeder::class,
            TicketSeeder::class,
            RegistrationSeeder::class,
            PaymentSeeder::class,
            FeedbackSeeder::class,
        ]);
    }
}