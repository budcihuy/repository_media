<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="max-w-6xl mx-auto p-6 space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">📋 Daftar Media</h2>
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all shadow-md">
                ➕ Tambah Media
            </a>
        </div>

        <!-- Data Kosong -->
        <!-- <p class="text-gray-500 italic">Belum ada data mahasiswa.</p> -->

        <!-- Data Tersedia -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                <thead class="bg-gray-100 text-gray-700 text-sm uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-3 text-left">NIM</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">Jurusan</th>
                        <th class="px-6 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-800">20221001</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Yahya Ibnu</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Teknik Informatika</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#edit" class="text-indigo-600 hover:text-indigo-800 font-semibold mr-4 transition">Edit</a>
                            <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-600 hover:text-red-800 font-semibold transition">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-800">20221002</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Siti Aminah</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Sistem Informasi</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#edit" class="text-indigo-600 hover:text-indigo-800 font-semibold mr-4 transition">Edit</a>
                            <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-600 hover:text-red-800 font-semibold transition">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
