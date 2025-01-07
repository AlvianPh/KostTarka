<?php

namespace App\Controllers;

class KonfirmasiPembayaran extends BaseController
{
    public function index()
    {
        // Menampilkan view manajemen kamar
        echo view('template/headerPemilik');
        echo view('konfirmasi_pembayaran');
        echo view(name: 'template/footer');
    }
}