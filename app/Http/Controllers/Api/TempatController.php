<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tempat; // Tambahkan impor model Tempat jika belum ada

class TempatController extends Controller
{
    public function index(Request $request)
    {
        // Uncomment atau hapus kode berikut jika sudah tidak diperlukan
        // dd($request->all());
        // die();
        
        // Jika menggunakan model Tempat, pastikan untuk mendeklarasikannya di atas
        $tempat = Tempat::all();

        return response()->json([
            'success' => 1,
            'message' => 'Get Tempat Berhasil',
            'tempats' => $tempat
        ]);
    }
}
