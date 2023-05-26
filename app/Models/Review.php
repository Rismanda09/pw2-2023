<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $review = [
        [
            'no' => 1,
            'film' => 'The Shawshank Redemption',
            'user' => 'Example',
            'rating' => 9.8,
            'review' => 'Sangat bagus',
            'tanggal' => '19-05-2023',
        ],
        [
            'no' => 2,
            'film' => 'Big Mouth',
            'user' => 'Example',
            'rating' => 9.7,
            'review' => 'Film yang diluar ekspetasi,sangat bagus',
            'tanggal' => '20-05-2023',
        ],
        [
            'no' => 3,
            'film' => 'Miracle cell no.7',
            'user' => 'Example',
            'rating' => 8.8,
            'review' => 'Cerita yang sangat menyayat hati siapapun yang menonton',
            'tanggal' => '19-05-2023',
        ],
        [
            'no' => 4,
            'film' => 'The World of the married',
            'user' => 'Example',
            'rating' => 9.8,
            'review' => 'Drama korea yang sangat emosional membuat penonton panas!',
            'tanggal' => 'Example',
        ],
        [
            'no' => 5,
            'film' => 'Twilight',
            'user' => 'Example',
            'rating' => 9.9,
            'review' => 'Para penggemar film fantasi tentu setuju jika film ini merupakan salah satu film bergenre fantasi dengan kisah yang sangat menarik.',
            'tanggal' => '20-05-2023',
        ],
    ];

    public function getAllReviews()
    {
        return $this->review;
    }
}
