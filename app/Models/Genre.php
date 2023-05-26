<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genre = [
        [
            'no' => 1,
            'nama genre' => 'Drama',
            'deskripsi' => 'Example',
        ],
        [
            'no' => 2,
            'nama genre' => 'Action',
            'deskripsi' => 'Example',
        ],
        [
            'no' => 3,
            'nama genre' => 'Melow',
            'deskripsi' => 'Example',
        ],
        [
            'no' => 4,
            'nama genre' => 'Drama',
            'deskripsi' => 'Example',
        ],
        [
            'no' => 5,
            'nama genre' => 'Action',
            'deskripsi' => 'Example',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genre;
    }
}
