<?php

// 6706223137 Wijdan Ardra Fulvian 46-04

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'userIdPetugas',
        'userIdPeminjam',
        'tanggalPinjam',
        'tanggalSelesai',
    ];
}
