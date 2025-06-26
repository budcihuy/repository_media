<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media - Daftar Mahasiswa</title>
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
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold text-gray-900">Daftar Mahasiswa</h2>
                        <a href="{{ route('mahasiswa.tambah') }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Tambah Mahasiswa
                        </a>
                    </div>
                    @if($mahasiswas->isEmpty())
                        <p class="text-gray-600">Belum ada data mahasiswa.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border rounded-lg">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">NIM</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Nama</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Email</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Prodi</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Angkatan</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswas as $mahasiswa)
                                        <tr class="border-t">
                                            <td class="px-6 py-4">{{ $mahasiswa->nim }}</td>
                                            <td class="px-6 py-4">{{ $mahasiswa->nama }}</td>
                                            <td class="px-6 py-4">{{ $mahasiswa->email }}</td>
                                            <td class="px-6 py-4">{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
                                            <td class="px-6 py-4">{{ $mahasiswa->angkatan }}</td>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}"
                                                   class="text-green-600 hover:underline">Edit</a>
                                                <form action="{{ route('mahasiswa.hapus', $mahasiswa->nim) }}"
                                                      method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="text-red-600 hover:underline ml-4"
                                                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>
</body>
</html>