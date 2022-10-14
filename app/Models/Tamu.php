<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = "tamus";
    protected $fillable = [
       'nama',
       'no_telp',
       'alamat',
       'email',
       'password'
    ];
}
