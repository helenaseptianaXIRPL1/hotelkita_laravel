<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $validator['password'] = Hash::make($validator['password']);

        //create post
        $post = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);


        return new PostResource(true, 'Ulasan anda sudah berhasil terkirim', $post);
    }
}
