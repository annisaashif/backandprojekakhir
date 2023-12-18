<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TempatController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});

//Route::post('login', 'Api/UserController@login');
//Route::post('register', 'Api/UserController@register');
//Route::get('tempat', 'Api/TempatController@index');

//Route::post('login', 'Api\UserController@login');
//Route::post('register', 'Api\UserController@register');
//Route::get('/tempat', [App\Http\Controllers\TempatController::class, 'index'])->name('tempat.index');

Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/tempat', [TempatController::class, 'index']);
Route::post('/tempat', [TempatController::class, 'index']);


//Route::get('/tempats', [TempatController::class, 'index']); // Endpoint untuk menampilkan daftar produk
//Route::post('/tempats', [TempatController::class, 'store']); // Endpoint untuk menyimpan produk baru