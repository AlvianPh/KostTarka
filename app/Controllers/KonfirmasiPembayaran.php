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
        $data['bukti_pending'] = $this->buktiBayarModel->where('status', 0)->findAll();

        // Ambil data riwayat transaksi yang sudah terkonfirmasi (status = 1)
        $data['bukti_riwayat'] = $this->buktiBayarModel->where('status', 1)->findAll();

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

