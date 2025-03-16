<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }

    public function create()
    {
        return view('create-mahasiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'prodi' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'status' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('update-mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil dihapus');
    }
}