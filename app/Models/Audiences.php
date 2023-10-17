<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'password',
        'email',
        'phone',
        'profile_pict',
    ];

    protected $hidden = [
        'user_id',
    ];
}
