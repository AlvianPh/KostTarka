<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Kamar;
use App\Models\BuktiBayar;

class DashboardPemilik extends BaseController
{
    public function index()
    {
        $user = new User();
        $kamar = new Kamar();
        $buktiBayar = new BuktiBayar();

        // Menghitung total penghasilan per tahun
        $tahun = date('Y');
        $penghasilanTahun = $buktiBayar
            ->selectSum('jumlah')
            ->where('YEAR(tanggal)', $tahun)
            ->where('status', '1')
            ->first()['jumlah'];

        // Mengambil jumlah pembayaran yang belum dikonfirmasi
        $notifikasiPembayaran = $buktiBayar
            ->where('status', 'tertunda')
            ->countAllResults();

        $data = [
            'totalPenghuni' => $user->where('id')->countAllResults(),
            'kamarTersedia' => $kamar->where('status', 'tersedia')->countAllResults(),
            'pembayaranTertunda' => $buktiBayar->where('status', 'tertunda')->countAllResults(),

            'penghasilanTahun' => $penghasilanTahun ?? 0,
            
            'penghuni' => $user->where('nama')->countAllResults(),
            'kamarTerpakai' => $kamar->where('status', 'terpakai')->findAll(),
            'notifikasiPembayaran' => $notifikasiPembayaran, // Kirim notifikasi ke view
        ];

        echo view('template/headerPemilik');
        echo view('dashboard_pemilik', $data);
        echo view('template/footer');
    }
}
