<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard TARKA',
            'penghuni' => ['Asdasdasd', 'dasdasf', 'dsfds', 'dsv', 'dsv', '...', '...'],
            'kamar' => ['Asdasdasd', 'dasdasf', 'dsfds', 'dsv', 'dsv', '...', '...'],
            'penghasilan' => ['Asdasdasd', 'dasdasf', 'dsfds', 'dsv', 'dsv', '...', '...'],
            'notifikasi' => [
                'Si A, Kamar A1 belum membayar bulan Juni',
                'Si B, Kamar A2 memasuki tenggat waktu pembayaran bulan ini',
                '...'
            ],
        ];

        return view('dashboard', $data);
    }
}
