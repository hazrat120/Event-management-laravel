<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Feature',
                'title' => 'Digital Bangladesh Summit 2024',
                'description' => 'Annual technology conference showcasing latest innovations in Bangladesh',
                'date' => '2024-05-15',
                'time' => '09:00 AM',
                'location' => 'BICC, Dhaka',
                'user_id' => 1,
                'categorie_id' => 1,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Feature',
                'title' => 'Pohela Boishakh Festival 2024',
                'description' => 'Biggest Bengali New Year celebration in Dhaka',
                'date' => '2024-04-14',
                'time' => '06:00 AM',
                'location' => 'Ramna Batamul',
                'user_id' => 2,
                'categorie_id' => 2,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Recent',
                'title' => 'Dhaka Startup Summit',
                'description' => 'Connecting startups with investors and mentors',
                'date' => '2024-06-20',
                'time' => '10:00 AM',
                'location' => 'ICCB, Dhaka',
                'user_id' => 2,
                'categorie_id' => 3,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Recent',
                'title' => 'International Trade Fair 2024',
                'description' => 'Largest international trade exhibition in Bangladesh',
                'date' => '2024-01-01',
                'time' => '10:00 AM',
                'location' => 'Sher-e-Bangla Nagar, Dhaka',
                'user_id' => 1,
                'categorie_id' => 4,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Feature',
                'title' => 'Chittagong Tech Expo',
                'description' => 'Showcasing emerging technologies in port city',
                'date' => '2024-07-18',
                'time' => '11:00 AM',
                'location' => 'Ctg Convention Center',
                'user_id' => 2,
                'categorie_id' => 1,
            ],
            // New entries start here
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Recent',
                'title' => 'Dhaka Literary Festival',
                'description' => 'Celebration of Bengali literature and authors',
                'date' => '2024-11-21',
                'time' => '09:30 AM',
                'location' => 'Bangla Academy',
                'user_id' => 1,
                'categorie_id' => 2,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Feature',
                'title' => 'Cox\'s Bazar Marathon 2024',
                'description' => 'Annual beach marathon on world\'s longest sea beach',
                'date' => '2024-02-10',
                'time' => '06:30 AM',
                'location' => 'Cox\'s Bazar Beach',
                'user_id' => 2,
                'categorie_id' => 3,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Recent',
                'title' => 'Sylhet Tea Festival',
                'description' => 'Celebrating Bangladesh\'s tea culture and heritage',
                'date' => '2024-04-05',
                'time' => '08:00 AM',
                'location' => 'Sylhet Tea Gardens',
                'user_id' => 1,
                'categorie_id' => 4,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Feature',
                'title' => 'Bangladesh Textile Expo',
                'description' => 'International exhibition of textile and garments industry',
                'date' => '2024-09-15',
                'time' => '10:00 AM',
                'location' => 'International Convention City',
                'user_id' => 2,
                'categorie_id' => 1,
            ],
            [
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'type' => 'Recent',
                'title' => 'National Education Summit',
                'description' => 'Conference on modern education techniques and policies',
                'date' => '2024-08-25',
                'time' => '09:00 AM',
                'location' => 'Dhaka University Campus',
                'user_id' => 1,
                'categorie_id' => 2,
            ]
        ]);
    }
}