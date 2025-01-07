<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        // Menampilkan view manajemen kamar
        echo view('template/headerPemilik');
        echo view('laporan');
        echo view(name: 'template/footer');
    }
}