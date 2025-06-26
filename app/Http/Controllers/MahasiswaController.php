<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        $prodis = Prodi::all();
        return view('mahasiswa.tambah', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email',
            'prodi' => 'required|exists:prodis,prodi_id',
            'angkatan' => 'required|string|max:4',
            'alamat' => 'nullable|string',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $prodis = Prodi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $request->validate([
            'nim' => 'required|string|unique:mahasiswa,nim,' . $nim . ',nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email,' . $nim . ',nim',
            'prodi' => 'required|exists:prodis,prodi_id',
            'angkatan' => 'required|string|max:4',
            'alamat' => 'nullable|string',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}