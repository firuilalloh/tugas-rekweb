<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    // Kita ambil dari database
    $product = Product::all();

    // Kirim data $produk di atas ke dalam file view bernama 'product.blade.php'
    return view('product', ['semuaProduk' => $product]);
});