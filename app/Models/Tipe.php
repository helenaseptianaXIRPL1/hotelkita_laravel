<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = "tipes";
    protected $primarykey = "id";
    protected $fillable = 
    [
        'id',
        'jenis_tipe',
        'harga_tipe',
        'kamar_id'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
