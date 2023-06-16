<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username', 'email', 'password', 'role'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}