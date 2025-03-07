<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedbacks')->insert([
            [
                'user_id' => 1,
                'event_id' => 1,
                'rating' => 5,
                'comments' => 'Excellent event organization and great speakers!',
            ],
            [
                'user_id' => 2,
                'event_id' => 2,
                'rating' => 4,
                'comments' => 'Beautiful cultural program, enjoyed the festivities.',
            ],
        ]);
    }
}