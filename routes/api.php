<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KamarController;
use App\Http\Controllers\Api\TipeController;
use App\Http\Controllers\Api\KontakController;
use App\Http\Controllers\Api\ProfilController;
use App\Http\Controllers\Api\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tipe', [TipeController::class, 'getAllTipe']);
Route::post('/kontak', [KontakController::class, 'store']);
Route::post('/profil', [ProfilController::class, 'data']);
Route::post('/register', [RegisterController::class, 'register']);
