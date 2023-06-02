<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image,png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1984,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Big Mouth',
            'poster' => 'image,png',
            'genre' => 'Action',
            'negara' => 'Korean',
            'tahun' => 2022,
            'rating' => 9.5,
        ],
        [
            'no' => 3,
            'judul' => 'Miracle cell no.7',
            'poster' => 'image,png',
            'genre' => 'Sad',
            'negara' => 'Indo',
            'tahun' => 1999,
            'rating' => 8.7,
        ],
        [
            'no' => 4,
            'judul' => 'The World of the married',
            'poster' => 'image,png',
            'genre' => 'Drama',
            'negara' => 'Korean',
            'tahun' => 1984,
            'rating' => 9.6,
        ],
        [
            'no' => 5,
            'judul' => 'Twilight',
            'poster' => 'image,png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 1984,
            'rating' => 9.8,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
