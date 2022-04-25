<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'nama_kamar',
        'foto_kamar',
        'jum_kamar',
        'fasilitas_kamar',
        'fasilitas_umum'
    ];
}
