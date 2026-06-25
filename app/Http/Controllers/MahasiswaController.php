<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // 1. Menampilkan daftar semua mahasiswa
    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // 2. Menampilkan form untuk menambah mahasiswa baru
    public function create() {
        return view('mahasiswa.create');
    }

    // 3. Menyimpan data mahasiswa baru ke database
    public function store(Request $request) {
        $request->validate(['nama' => 'required', 'nim' => 'required', 'jurusan' => 'required']);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambah!');
    }

    // 4. Menampilkan detail satu mahasiswa tertentu
    public function show($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // 5. Menampilkan form untuk edit data
    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // 6. Menyimpan perubahan data ke database
    public function update(Request $request, $id) {
        $request->validate(['nama' => 'required', 'nim' => 'required', 'jurusan' => 'required']);
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate!');
    }

    // 7. Menghapus data dari database
    public function destroy($id) {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index')->with('success', 'Data dihapus!');
    }
}