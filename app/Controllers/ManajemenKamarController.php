<?php

namespace App\Controllers;

class ManajemenKamarController extends BaseController
{
    public function index()
    {
        // Menampilkan view manajemen kamar
        return view('manajemen_kamar');
    }
}
