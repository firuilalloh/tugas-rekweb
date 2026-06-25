<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-900 text-slate-100 p-8">

<div class="max-w-5xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition">
            + Tambah Mahasiswa
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-600 text-white p-4 mb-4 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-slate-800 rounded-xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-700 text-slate-300">
                <tr>
                    <th class="px-6 py-3">NIM</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Jurusan</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-700">
                @foreach($mahasiswas as $mhs)
                <tr class="hover:bg-slate-700/50 transition">
                    <td class="px-6 py-4">{{ $mhs->nim }}</td>
                    <td class="px-6 py-4 font-medium">{{ $mhs->nama }}</td>
                    <td class="px-6 py-4 text-slate-400">{{ $mhs->jurusan }}</td>
                    <td class="px-6 py-4 text-center space-x-3">
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-amber-400 hover:text-amber-300 font-semibold">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus data {{ $mhs->nama }}?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300 font-semibold">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>