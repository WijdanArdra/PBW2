<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = "collections";

    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];
}

// Wijdan Ardra Fulvian 6706223137 46-04