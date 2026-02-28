<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'username',
        'avatar',
        'role',
        'platform',
        'bio',
        'favorite_color',
        'joined_at',
    ];
}