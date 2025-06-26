<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media - Tambah Mahasiswa</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white p-6 fixed h-full shadow-lg">
            <h2 class="text-2xl font-bold mb-8 text-gray-100">Dashboard</h2>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="block py-2.5 px-4 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Route::currentRouteName() === 'dashboard' ? 'bg-gray-700 text-white' : '' }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mahasiswa') }}"
                           class="block py-2.5 px-4 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Route::currentRouteName() === 'mahasiswa' ? 'bg-gray-700 text-white' : '' }}">
                            Mahasiswa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('prodi') }}"
                           class="block py-2.5 px-4 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Route::currentRouteName() === 'prodi' ? 'bg-gray-700 text-white' : '' }}">
                            Prodi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('media') }}"
                           class="block py-2.5 px-4 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Route::currentRouteName() === 'media' ? 'bg-gray-700 text-white' : '' }}">
                            Media
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kategori') }}"
                           class="block py-2.5 px-4 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ Route::currentRouteName() === 'kategori' ? 'bg-gray-700 text-white' : '' }}">
                            Kategori
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-8">
            <header class="mb-8">
                <h1 class="text-4xl font-extrabold text-gray-900">Welcome to Dashboard</h1>
                <p class="text-gray-600 mt-2">Manage your data efficiently and effectively.</p>
            </header>
            <main class="bg-white rounded-xl shadow-md p-6">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="space-y-6">
                    <h2 class="text-2xl font-semibold text-gray-900">Tambah Mahasiswa</h2>
                    <form action="{{ route('mahasiswa.simpan') }}" method="POST" class="max-w-lg">
                        @csrf
                        <div class="mb-4">
                            <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                            <input type="text" name="nim" id="nim" value="{{ old('nim') }}"
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('nim') border-red-500 @enderror">
                            @error('nim')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('nama') border-red-500 @enderror">
                            @error('nama')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="prodi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                            <select name="prodi" id="prodi"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('prodi') border-red-500 @enderror">
                                <option value="">Pilih Prodi</option>
                                @foreach($prodis as $prodi)
                                    <option value="{{ $prodi->prodi_id }}"
                                            {{ old('prodi') == $prodi->prodi_id ? 'selected' : '' }}>{{ $prodi->nama_prodi }}</option>
                                @endforeach
                            </select>
                            @error('prodi')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="angkatan" class="block text-sm font-medium text-gray-700">Angkatan</label>
                            <input type="text" name="angkatan" id="angkatan" value="{{ old('angkatan') }}"
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('angkatan') border-red-500 @enderror">
                            @error('angkatan')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <textarea name="alamat" id="alamat"
                                      class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('alamat') border-red-500 @enderror">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center">
                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">Simpan</button>
                            <a href="{{ route('mahasiswa') }}"
                               class="ml-4 text-gray-600 hover:underline">Batal</a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>