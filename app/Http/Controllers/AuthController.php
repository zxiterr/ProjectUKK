<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Ambil data input
        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials)) {

            // Regenerate session
            $request->session()->regenerate();

            // Bila admin, masuk dashboard admin
            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            }

            // Bila user biasa
            return redirect('/dashboard');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
