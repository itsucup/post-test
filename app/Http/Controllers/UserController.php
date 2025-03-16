<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    // Menampilkan form tambah user
    public function create()
    {
        return view('create-user');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/user')->with('success', 'User berhasil ditambahkan!');
    }

    // Menampilkan form edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('update-user', compact('user'));
    }

    // Menyimpan perubahan user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required'.$id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/user')->with('success', 'User berhasil diperbarui!');
    }

    // Menghapus user
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/user')->with('success', 'User berhasil dihapus!');
    }
}