<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Twiglight',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'The World Of The Married',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'Asia',
            'tahun' => 2020,
            'rating' => 9.9,
        ]);
    }
}
