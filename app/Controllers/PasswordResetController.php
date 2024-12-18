<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PasswordResetController extends BaseController
{
    public function index()
    {
        // Menampilkan halaman reset password
        $data['title'] = "Reset Password";
        return view('reset_password_form', $data);
    }

    public function process()
    {
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password tidak cocok. Silakan ulangi.');
        }

        // Tambahkan logika menyimpan password di database
        // Contoh: validasi atau hashing password

        return redirect()->to('/login')->with('success', 'Password berhasil diubah.');
    }
}
