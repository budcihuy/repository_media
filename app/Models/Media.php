<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'media';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi
    protected $fillable = [
        'judul',
        'tipe',
        'path',
        'deskripsi',
        'uploaded_by'
    ];
}
