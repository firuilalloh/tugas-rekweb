<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-900 p-8 text-white">
    <div class="max-w-md mx-auto bg-slate-800 p-6 rounded-xl">
        <h2 class="text-xl font-bold mb-4">Tambah Mahasiswa</h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nama" placeholder="Nama" class="w-full p-2 rounded bg-slate-700 border border-slate-600 text-black" required >
            <input type="text" name="nim" placeholder="NIM" class="w-full p-2 rounded bg-slate-700 border border-slate-600 text-black" required >
            <input type="text" name="jurusan" placeholder="Jurusan" class="w-full p-2 rounded bg-slate-700 border border-slate-600 text-black" required >
            <button type="submit" class="w-full bg-blue-600 p-2 rounded font-bold hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</body>
</html>