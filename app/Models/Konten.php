<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_konten',
        'deskripsi',
        'tanggal_publish',
        'kreator_id',
        'video_url',
        'harga',
    ];

    protected $hidden = [
        'konten_id',
        'kreator_id',
    ];
}
