<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;

use App\Models\Tipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    function getAlltipe(){
    $tipe = Tipe::with('kamar')->paginate(2);
    return $tipe;
    }
}
