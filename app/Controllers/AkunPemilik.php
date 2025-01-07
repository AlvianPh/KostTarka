<?php

namespace App\Controllers;

class AkunPemilik extends BaseController
{
    public function index()
    {
        // Menampilkan view manajemen kamar
        echo view('template/headerPemilik');
        echo view('akun_pemilik');
        echo view(name: 'template/footer');
    }
}
