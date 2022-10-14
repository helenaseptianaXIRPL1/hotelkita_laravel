<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tamu;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class ProfilController extends Controller
{
    public function data(Request $request){
        

        $post = Tamu::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return new PostResource(true, 'Ulasan anda sudah berhasil terkirim', $post);
    }
}
