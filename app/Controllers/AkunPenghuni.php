<?php

namespace App\Controllers;

use App\Models\User;

class AkunPenghuni extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function index()
    {
        $data = [
            'title' => 'Informasi Akun',
            // 'user' => $userData, // Hanya satu baris data
        ];

        // Load view dengan data
        echo view('template/headerPenghuni', $data);
        echo view('akun_penghuni', $data);
        echo view('template/footer');
    }
    
    public function edit()
    {
        $data = [
            'title' => 'Edit Akun',
            // 'user' => $userData, // Hanya satu baris data
        ];

        // Load view dengan data
        echo view('template/headerPemilik', $data);
        echo view('ubah_password', $data);
        echo view('template/footer');
    }
    
}
