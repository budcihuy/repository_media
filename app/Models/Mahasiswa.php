<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'mahasiswas';

    // Primary key
    protected $primaryKey = 'nim'; // Biasanya NIM digunakan sebagai primary key

    // Kolom yang boleh diisi
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'prodi',
        'angkatan',
        'alamat'
    ];
}
