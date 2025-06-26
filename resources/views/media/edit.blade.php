<!DOCTYPE html>
<html>
<head>
    <title>Edit Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Media</h2>

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

    <form action="{{ route('media.update', $media->media_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-md-6 mb-3">
                <label for="judul" class="form-label">Judul Media:</label>
                <input type="text" name="judul" class="form-control" value="{{ $media->judul }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="judul_penelitian" class="form-label">Judul Penelitian:</label>
                <input type="text" name="judul_penelitian" class="form-control" value="{{ $media->judul_penelitian }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" style="height:150px" name="deskripsi">{{ $media->deskripsi }}</textarea>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6 mb-3">
                <label for="mahasiswa_id" class="form-label">Mahasiswa:</label>
                <select name="mahasiswa_id" class="form-select">
                    @foreach ($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->mahasiswa_id }}" {{ $media->mahasiswa_id == $mahasiswa->mahasiswa_id ? 'selected' : '' }}>
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
                        <option value="{{ $kategori->kategori_id }}" {{ $media->kategori_id == $kategori->kategori_id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
             <div class="col-md-6 mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" class="form-control" value="{{ $media->tahun_terbit }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="link_media" class="form-label">URL Media:</label>
                <input type="url" name="link_media" class="form-control" value="{{ $media->link_media }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="gambar_cover" class="form-label">Gambar Cover (Kosongkan jika tidak ingin diubah):</label>
                <input type="file" name="gambar_cover" class="form-control mb-2">
                @if($media->gambar_cover)
                    <img src="{{ asset('storage/covers/' . $media->gambar_cover) }}" width="150px">
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a class="btn btn-secondary" href="{{ route('media.index') }}"> Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
