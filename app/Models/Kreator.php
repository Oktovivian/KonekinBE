<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kreator extends Model
{
    use HasFactory;

    protected $fillable = [
        'kreatorName',
    ];

    protected $hidden = [
        'UserID',
        'kreatorID'
    ];
}
