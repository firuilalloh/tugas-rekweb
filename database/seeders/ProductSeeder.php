<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'Website Portfolio Nextera',
            'harga' => 1500000, // Angka bulat, tanpa Rp atau titik
            'status' => 'Ready'
        ]);

        Product::create([
            'nama' => 'Aplikasi Cashier OS',
            'harga' => 3500000,
            'status' => 'Ready'
        ]);

        Product::create([
            'nama' => 'Slicing UI Figma',
            'harga' => 500000,
            'status' => 'Pre-Order'
        ]);
    }
}
