<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Twiglight',
            'user' => 'Bella Swan',
            'rating' => 9.9,
            'ulasan' => 'Cerita vampire yang tidak biasa,dan efek visual yang keren',
            'tahun' => 2002,
        ]);

        Review::create([
            'film' => 'The World Of The Married',
            'user' => 'Han So Hee',
            'rating' => 9.8,
            'ulasan' => 'Cerita perselingkuhan yang tidak biasa dan berbalas dendam yang elegan',
            'tahun' => 2021,
        ]);

        Review::create([
            'film' => 'Miracle In Cell No.07',
            'user' => 'Vino G Bastian',
            'rating' => 9.7,
            'ulasan' => 'Kemistri seorang ayah disabilitas dengan anaknya begitu kuat,membuat penonton terharu',
            'tahun' => 2022,
        ]);
    }
}
