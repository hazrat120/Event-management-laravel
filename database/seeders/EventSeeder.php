<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'type' => 'Feature',
                'title' => 'পহেলা বৈশাখ উৎসব ২০২৪',
                'description' => 'বাংলা নববর্ষ উদযাপন - ঐতিহ্যবাহী সাংস্কৃতিক অনুষ্ঠান, নৃত্য ও খাবারের আয়োজন',
                'date' => '2024-04-14',
                'time' => '06:00 AM',
                'location' => 'রমনা বটমূল, ঢাকা',
                'user_id' => 1,
                'categorie_id' => 1,
            ],
            [
                'type' => 'Feature',
                'title' => 'ঢাকা আন্তর্জাতিক বাণিজ্য মেলা',
                'description' => 'বাংলাদেশের পণ্য, হস্তশিল্প ও ব্যবসায় প্রদর্শনীর বার্ষিক আয়োজন',
                'date' => '2024-03-25',
                'time' => '10:00 AM',
                'location' => 'বাংলাদেশ-চীন বন্ধুত্ব প্রদর্শনী কেন্দ্র, ঢাকা',
                'user_id' => 1,
                'categorie_id' => 6,
            ],
            [
                'type' => 'Recent',
                'title' => 'বাংলাদেশ খাদ্য উৎসব',
                'description' => 'বাংলাদেশের ঐতিহ্যবাহী খাবার ও রান্নার প্রদর্শনী',
                'date' => '2024-03-30',
                'time' => '12:00 PM',
                'location' => 'বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্র, ঢাকা',
                'user_id' => 1,
                'categorie_id' => 3,
            ],
            [
                'type' => 'Recent',
                'title' => 'ডিজিটাল বাংলাদেশ টেক সামিট',
                'description' => 'বাংলাদেশের ডিজিটাল রূপান্তর ও প্রযুক্তি উদ্ভাবন বিষয়ক সম্মেলন',
                'date' => '2024-04-05',
                'time' => '09:00 AM',
                'location' => 'আইসিটি টাওয়ার, আগারগাঁও, ঢাকা',
                'user_id' => 1,
                'categorie_id' => 4,
            ],
            [
                'type' => 'Feature',
                'title' => 'চট্টগ্রাম সাংস্কৃতিক সন্ধ্যা',
                'description' => 'চট্টগ্রামের ঐতিহ্যবাহী সংস্কৃতি উদযাপন',
                'date' => '2024-04-20',
                'time' => '06:30 PM',
                'location' => 'থিয়েটার ইনস্টিটিউট চট্টগ্রাম',
                'user_id' => 2,
                'categorie_id' => 2,
            ],
            [
                'type' => 'Feature',
                'title' => 'বাংলাদেশ আন্তর্জাতিক চলচ্চিত্র উৎসব',
                'description' => 'বাংলাদেশের সেরা চলচ্চিত্র প্রদর্শনী ও আন্তর্জাতিক চলচ্চিত্র উৎসব',
                'date' => '2024-05-15',
                'time' => '11:00 AM',
                'location' => 'বাংলাদেশ শিল্পকলা একাডেমি, ঢাকা',
                'user_id' => 2,
                'categorie_id' => 2,
            ],
            [
                'type' => 'Recent',
                'title' => 'বাংলাদেশ ক্রিকেট লিগ ফাইনাল',
                'description' => 'বাংলাদেশের সবচেয়ে বড় ক্রিকেট টুর্নামেন্টের চূড়ান্ত খেলা',
                'date' => '2024-05-01',
                'time' => '02:00 PM',
                'location' => 'শের-ই-বাংলা জাতীয় ক্রিকেট স্টেডিয়াম, ঢাকা',
                'user_id' => 3,
                'categorie_id' => 5,
            ],
            [
                'type' => 'Feature',
                'title' => 'বাংলাদেশ ফ্যাশন উইক ২০২৪',
                'description' => 'বাংলাদেশের সেরা ফ্যাশন ডিজাইনারদের প্রদর্শনী ও ফ্যাশন শো',
                'date' => '2024-06-10',
                'time' => '07:00 PM',
                'location' => 'রেডিসন হোটেল, ঢাকা',
                'user_id' => 3,
                'categorie_id' => 2,
            ]
        ]);
    }
} 