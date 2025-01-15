<?php

namespace App\Controllers;

use App\Models\BuktiBayar;

class KonfirmasiPembayaran extends BaseController
{
    protected $buktiBayarModel;

    public function __construct()
    {
        $this->buktiBayarModel = new BuktiBayar();
    }

    // Menampilkan semua bukti pembayaran yang perlu dikonfirmasi oleh pemilik
    public function index()
    {
        // Ambil data bukti pembayaran yang belum terkonfirmasi (status = 0)
        $data['bukti_pending'] = $this->buktiBayarModel->getPembayaran();
        // return var_dump($data);

        // $db = \Config\Database::connect();
        // $builder = $db->table('users');
        // $builder->select('users.*, users.id as userid');
        // $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $builder->where(['name' => 'penghuni']);
        // $query = $builder->get();
        // $result = $query->getResultArray();

        // Ambil data riwayat transaksi yang sudah terkonfirmasi (status = 1)
        // $data['bukti_riwayat'] = $this->buktiBayarModel->where('status', 1)
        // ->join('kamar', 'bukti.id_kamar = kamar.id_kamar')->findAll();

        // Load views
        echo view('template/headerPemilik', $data);
        echo view('konfirmasi_pembayaran', $data); 
        echo view('template/footer');
    }

    // Mengubah status pembayaran menjadi disetujui
    public function setujui($id)
    {
        // Cek apakah ID valid
        $buktiBayar = $this->buktiBayarModel->find($id);
        if (!$buktiBayar) {
            return redirect()->to('/konfirmasi_pembayaran')->with('error', 'Data tidak ditemukan.');
        }

        // Perbarui status menjadi "disetujui"
        $this->buktiBayarModel->update($id, ['status' => 1]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/konfirmasi_pembayaran')->with('success', 'Pembayaran telah disetujui.');
    }
}

