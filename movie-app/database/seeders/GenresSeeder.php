<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Twiglight',
            'deskripsi' => 'Drama percintaan antara Bella dengan Edward yang merupakan seorang vampire',
        ]);

        Genre::create([
            'nama' => 'The World Of The Married',
            'deskripsi' => 'Menceritakan tentang dunia pasangan menikah yang berkhianat, mendorong mereka pada kesedihan, kemarahan, rasa ingin balas dendam',
        ]);

        Genre::create([
            'nama' => 'Miracle In Cell No.07',
            'deskripsi' => 'seorang ayah dengan keterbelakangan mental ringan yang harus bertahan hidup di dalam penjara setelah salah dianggap sebagai pembunuh',
        ]);
    }
}
