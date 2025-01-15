<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Kamar;
use App\Models\BuktiBayar;

class DashboardPenghuni extends BaseController
{
    public function index()
    {
        $userId = session()->get('id'); // Mengambil ID penghuni dari sesi login
        $kamarModel = new Kamar();
        $buktiBayarModel = new BuktiBayar();

        // Data Kamar
        $kamar = $kamarModel->where('id_kamar', $userId)->first();

        // Data Pembayaran
        $pembayaran = $buktiBayarModel->where('id_bukti', $userId)->findAll();

        // Data Notifikasi (Jika ada fitur notifikasi)
        $notifikasi = [
            ['pesan' => 'Pembayaran bulan ini jatuh tempo pada tanggal 10', 'tanggal' => date('Y-m-d')],
            ['pesan' => 'Silakan konfirmasi pembayaran untuk bulan lalu.', 'tanggal' => date('Y-m-d', strtotime('-7 days'))],
        ];

        $data = [
            'kamar' => $kamar,
            'pembayaran' => $pembayaran,
            'notifikasi' => $notifikasi,
        ];

        echo view('template/headerPenghuni');
        echo view('dashboard_penghuni', $data);
        echo view('template/footer');
    }
}
