<?php

namespace App\Controllers;

class DashboardPemilik extends BaseController
{
    public function index()
    {
        // Menampilkan view manajemen kamar
        echo view('template/headerPemilik');
        echo view('dashboard_pemilik');
        echo view(name: 'template/footer');
    }
}
