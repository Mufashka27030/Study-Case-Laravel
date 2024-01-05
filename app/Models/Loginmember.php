<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginmember extends Model
{
    use HasFactory;
    protected $table = 'loginmember';
    protected $primaryKey = 'memberid';
    protected $fillable = [
        'memberid',
        'name',
        'email',
        'password',
    ];
    public $timestamps = false;
}
