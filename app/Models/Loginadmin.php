<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginadmin extends Model
{
    use HasFactory;

    protected $table = 'loginadmin';
    protected $primaryKey = 'adminid';
}
