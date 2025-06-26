<!DOCTYPE html>
<html>
<head>
    <title>Detail Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Detail Media</h2>
        </div>
        <div class="card-body">
            @if($media->gambar_cover)
                <div class="mb-3 text-center">
                    <img src="{{ asset('storage/covers/' . $media->gambar_cover) }}" alt="Cover" class="img-fluid rounded" style="max-height: 400px;">
                </div>
            @endif

            <div class="mb-3">
                <strong>Judul Media:</strong>
                <p>{{ $media->judul }}</p>
            </div>
            <div class="mb-3">
                <strong>Judul Penelitian:</strong>
                <p>{{ $media->judul_penelitian }}</p>
            </div>
             <div class="mb-3">
                <strong>Deskripsi:</strong>
                <p>{{ $media->deskripsi }}</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>Mahasiswa:</strong>
                    <p>{{ $media->mahasiswa->nama ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Kategori:</strong>
                    <p>{{ $media->kategori->nama_kategori ?? 'Tidak ada kategori' }}</p>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>Tahun Terbit:</strong>
                    <p>{{ $media->tahun_terbit }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Link Media:</strong>
                    <p><a href="{{ $media->link_media }}" target="_blank">{{ $media->link_media }}</a></p>
                </div>
            </div>
             <div class="mt-3">
                <a class="btn btn-primary" href="{{ route('media.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
