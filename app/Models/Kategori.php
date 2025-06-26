<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'kategoris'; // Ganti sesuai nama tabel di database

    // Primary key dari tabel
    protected $primaryKey = 'id'; // Ganti jika primary key bukan 'id'

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama_kategori', // Tambahkan nama kolom sesuai dengan struktur tabel
        'deskripsi',
    ];
}
