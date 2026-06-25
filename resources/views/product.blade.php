<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Saya</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans p-8">

    <div class="max-w-4xl mx-auto">
        <header class="mb-8 border-b border-gray-700 pb-4">
            <h1 class="text-3xl font-bold text-cyan-400">Nextera Lab Store</h1>
            <p class="text-gray-400">List project website dan micro-saas yang tersedia.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($semuaProduk as $item)
                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-lg hover:border-cyan-500 transition">
                    <h3 class="text-xl font-semibold mb-2 text-white">{{ $item['nama'] }}</h3>
                    <p class="text-cyan-400 font-bold mb-4">{{ $item['harga'] }}</p>
                    
                    @if($item['status'] == 'Ready')
                        <span class="bg-green-500/20 text-green-400 text-xs px-2.5 py-1 rounded-full font-medium">
                            {{ $item['status'] }}
                        </span>
                    @else
                        <span class="bg-yellow-500/20 text-yellow-400 text-xs px-2.5 py-1 rounded-full font-medium">
                            {{ $item['status'] }}
                        </span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>