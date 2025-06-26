<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Tailwind CDN (jika belum pakai Vite) -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white p-6 fixed h-full shadow-xl">
      <div class="mb-10">
        <h2 class="text-3xl font-extrabold tracking-wide">📊 Dashboard</h2>
        <p class="text-sm text-gray-400"> Admin Panel</p>
      </div>
      <nav class="space-y-2">

        <a href="#" class="flex items-center px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">
          <span class="ml-2">Dashboard</span>
        </a>

        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-700 transition">
          <span class="ml-2">Mahasiswa</span>
        </a>

        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-700 transition">
          <span class="ml-2">Prodi</span>
        </a>

        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-700 transition">
          <span class="ml-2">Kategori</span>
        </a>

        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-700 transition">
          <span class="ml-2">Media</span>
        </a>


      </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1 p-8">
      <!-- Header -->
      <header class="mb-8">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Welcome, Admin 👋</h1>
        <p class="text-gray-600">Manage your dashboard with ease and clarity.</p>
      </header>

      <!-- Cards / Info Section -->
      <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-blue-500">
          <h3 class="text-xl font-semibold text-gray-700">Total Mahasiswa</h3>
          <p class="mt-2 text-3xl font-bold text-blue-600">0</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-green-500">
          <h3 class="text-xl font-semibold text-gray-700">Total Prodi</h3>
          <p class="mt-2 text-3xl font-bold text-green-600">0</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-yellow-500">
          <h3 class="text-xl font-semibold text-gray-700">Total media</h3>
          <p class="mt-2 text-3xl font-bold text-purple-600">0</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-purple-500">
          <h3 class="text-xl font-semibold text-gray-700">Total Kategori</h3>
          <p class="mt-2 text-3xl font-bold text-purple-600">0</p>
        </div>

      </section>

      <!-- Main Section -->
      <section class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Activity Log</h2>
        <ul class="space-y-2">
          <li class="flex justify-between text-gray-700 border-b pb-2">
            <span>Added new Mahasiswa</span>
            <span class="text-sm text-gray-500">1 hour ago</span>
          </li>
          <li class="flex justify-between text-gray-700 border-b pb-2">
            <span>Updated Prodi</span>
            <span class="text-sm text-gray-500">3 hours ago</span>
          </li>
          <li class="flex justify-between text-gray-700">
            <span>Deleted Media</span>
            <span class="text-sm text-gray-500">Yesterday</span>
          </li>
        </ul>
      </section>
    </main>
  </div>

</body>
</html>
