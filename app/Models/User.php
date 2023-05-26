<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $user = [
        [
            'no' => 1,
            'nama' => 'Rismanda Aulia Putri',
            'username' => 'Manda',
            'password' => 'Rismanda#09',
            'email' => 'rism@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 2,
            'nama' => 'Rismanda',
            'username' => 'Manda Aurel',
            'password' => 'Rismanda#0917',
            'email' => 'rismanda@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 3,
            'nama' => 'Example',
            'username' => 'Aurel',
            'password' => 'Blalala#00',
            'email' => 'example@gmail.com',
            'role' => 'User',
        ],
        
    ];

    public function getAllUsers()
    {
        return $this->user;
    }
}
