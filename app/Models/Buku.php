<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $primaryKey = 'id';

    protected $fillable = [

    'nama_buku',
    'kategori_buku',
    'stok_buku',
    'status_peminjaman',

    ];

    public $timestamps = false;

}

