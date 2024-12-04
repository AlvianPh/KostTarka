<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        // Logika autentikasi pengguna
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validasi login
        if ($email === 'admin@example.com' && $password === 'password') {
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah!');
        }
    }

    public function forgotPassword()
    {
        return view('forgot-password'); // Buat halaman lupa password
    }
}
