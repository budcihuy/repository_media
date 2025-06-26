<!DOCTYPE html>
<html>
<head>
    <title>Tambah Media Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Media Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terjadi kesalahan pada input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="judul" class="form-label">Judul Media:</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Media" value="{{ old('judul') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="judul_penelitian" class="form-label">Judul Penelitian:</label>
                <input type="text" name="judul_penelitian" class="form-control" placeholder="Judul Penelitian" value="{{ old('judul_penelitian') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="mahasiswa_id" class="form-label">Mahasiswa:</label>
                <select name="mahasiswa_id" class="form-select">
                    <option selected disabled>Pilih Mahasiswa</option>
                    @foreach ($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->mahasiswa_id }}" {{ old('mahasiswa_id') == $mahasiswa->mahasiswa_id ? 'selected' : '' }}>
                            {{ $mahasiswa->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="kategori_id" class="form-label">Kategori:</label>
                <select name="kategori_id" class="form-select">
                    <option value="">Tidak ada kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->kategori_id }}" {{ old('kategori_id') == $kategori->kategori_id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
             <div class="col-md-6 mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" class="form-control" placeholder="YYYY" value="{{ old('tahun_terbit') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="link_media" class="form-label">URL Media:</label>
                <input type="url" name="link_media" class="form-control" placeholder="https://contoh.com" value="{{ old('link_media') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="gambar_cover" class="form-label">Gambar Cover:</label>
                <input type="file" name="gambar_cover" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="{{ route('media.index') }}"> Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
