<?php


namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Kontak;


class KontakController extends Controller
{

    public function store(Request $request){
    $post = Kontak::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'pesan' => $request->pesan
    ]);

    return new PostResource(true, 'Ulasan anda sudah berhasil terkirim', $post);
  }
  
}
