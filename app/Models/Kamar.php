<?php

namespace App\Models;

use CreateTipesTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = "kamars";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'no_kamar'

    ];

    public function tipe()
    {
        return $this->hasMany(Tipe::class);
    }
}
