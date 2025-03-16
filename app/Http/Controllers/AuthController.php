<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ]);

    try {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    } catch (\Exception $e) {
        return back()->with('error', 'Registrasi gagal. Silakan coba lagi.');
    }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}