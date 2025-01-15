<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Kamar;
use App\Models\BuktiBayar;
use App\Models\Sewa;

class DashboardPenghuni extends BaseController
{
    protected $kamar;
    protected $bukti;
    protected $users;
    protected $sewa;

    public function __construct()
    {
        $this->kamar = new Kamar();
        $this->bukti = new BuktiBayar();
        $this->users = new User();
        $this->sewa = new Sewa();
        helper(['form']);
    }

    public function index()
    {
        $notifikasi = [
            ['pesan' => 'Pembayaran bulan ini jatuh tempo pada tanggal 10', 'tanggal' => date('Y-m-d')],
            ['pesan' => 'Silakan konfirmasi pembayaran untuk bulan lalu.', 'tanggal' => date('Y-m-d', strtotime('-7 days'))],
        ];

        $data = [
            'kamar' => $this->kamar->getPenghuniKamar(),
            'notifikasi' => $notifikasi,
        ];

        echo view('template/headerPenghuni');
        echo view('dashboard_penghuni', $data);
        echo view('template/footer');
    }
}
