<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; // Pastikan Anda mengimport kelas Model yang benar

class Tempat extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'name',
        'judul',
        'deskripsi',
        'category_id',
        'image',
        // Tambahkan atribut-atribut lainnya sesuai dengan kebutuhan Anda
    ];
}

