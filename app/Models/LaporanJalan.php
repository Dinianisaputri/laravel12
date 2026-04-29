<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanJalan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_tiket',
        'judul',
        'kategori',
        'deskripsi',
        'foto'
    ];
}

