<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

use Illuminate\Support\Facades\Route;

// Redirect root ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rute Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name('mahasiswa.tambah');
Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'simpan'])->name('mahasiswa.simpan');
Route::get('/mahasiswa/edit/{nim}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/hapus/{nim}', [MahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');

// Rute Prodi
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');
Route::get('/prodi/tambah', [ProdiController::class, 'tambah'])->name('prodi.tambah');
Route::post('/prodi/simpan', [ProdiController::class, 'simpan'])->name('prodi.simpan');
Route::get('/prodi/{id}', [ProdiController::class, 'show'])->name('prodi.show');
Route::get('/prodi/edit/{id}', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/prodi/update/{id}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/hapus/{id}', [ProdiController::class, 'hapus'])->name('prodi.hapus');

// Rute Media (placeholder)
Route::get('/media', function () {
    return view('media');
})->name('media');

// Rute Kategori (placeholder)
Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');