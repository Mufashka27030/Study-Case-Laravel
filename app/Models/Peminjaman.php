<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id_buku',
        'memberid',
        'tanggal_peminjaman_buku',
        'tanggal_pengembalian_buku',
        'status',

    ];
    public $timestamps = false;

    public function buku()
    {
     return $this->hasOne(Buku::class, 'id','id_buku');
    }
}
