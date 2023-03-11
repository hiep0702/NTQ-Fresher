<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'phone_number',
        'gender',
        'status',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
