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
            ->where('status', '0')
            ->countAllResults();
            
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.*, users.id as userid');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where(['name' => 'penghuni']);
        $query = $builder->get();
        $result = $query->getResultArray(); 
        


        $data = [
            'totalPenghuni' => $result,
            'pembayaranTertunda' => $buktiBayar->where('status', '0')->countAllResults(),

            
            'penghasilanTahun' => $penghasilanTahun ?? 0,

            'penghuni' => $user->where('nama')->countAllResults(),
            'kamarTerpakai' => $kamar->where('status', '1')->findAll(),
            'notifikasiPembayaran' => $notifikasiPembayaran, // Kirim notifikasi ke view
        ];

        echo view('template/headerPemilik');
        echo view('dashboard_pemilik', $data);
        echo view('template/footer');
    }
}
