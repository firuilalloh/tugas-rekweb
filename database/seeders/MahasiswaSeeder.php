<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Yanto',
            'nim' => '12345',
            'jurusan' => 'iniformatika'
        ]);
        Mahasiswa::create([
            'nama' => 'Andri',
            'nim' => '13456',
            'jurusan' => 'pertanian'
        ]);
        Mahasiswa::create([
            'nama' => 'Bambang',
            'nim' => '13234',
            'jurusan' => 'bisnis'
        ]);
        Mahasiswa::create([
            'nama' => 'Asep',
            'nim' => '759575',
            'jurusan' => 'farmasi'
        ]);
    }
}
