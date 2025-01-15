<?php

namespace App\Controllers;

use App\Models\Kamar;
use App\Models\Sewa;

class ListKamar extends BaseController
{
    protected $kamar;
    protected $sewa;
    

    public function __construct()
    {
        $this->kamar = new Kamar();
        $this->sewa = new Sewa();
        helper(['form']);
    }

    public function index()
    {
        // Ambil data kamar
        $data = [
            'title' => 'Daftar Kamar',
            'kamarList' => $this->kamar->getPenghuniKamar(), // Ambil semua data kamar
        ];

        // Load views
        echo view('template/headerPenghuni', $data);
        echo view('list_kamar', $data);
        echo view('template/footer');
    }

    public function detail($id)
    {
        // Ambil detail kamar berdasarkan ID
        $kamar = $this->kamar->find($id);

        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Kamar dengan ID $id tidak ditemukan.");
        }

        $data = [
            'title' => 'Detail Kamar',
            'kamar' => $kamar,
        ];

        // Load views
        echo view('template/headerPenghuni', $data);
        echo view('detail_kamar', $data);
        echo view('template/footer');
    }

    public function masukKamar($id)
    {
        // Ambil data kamar berdasarkan ID
        $kamar = $this->kamar->find($id);

        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Kamar dengan ID $id tidak ditemukan.");
        }

        if ($this->request->getMethod() === 'POST') {
            // Ambil token dari input
            $inputToken = $this->request->getVar('token');

            // Validasi token
            if ($inputToken !== $kamar['token']) {
                session()->setFlashdata('error', 'Token yang dimasukkan salah.');
                return redirect()->back();
            }            

            // Ambil tanggal saat ini (tanggal masuk)
            $tanggalAwal = date('Y-m-d');

            // Hitung tanggal akhir (30 hari ke depan)
            $tanggalAkhir = date('Y-m-d', strtotime('+30 days'));

            // Gunakan SewaModel untuk memasukkan data penyewaan            
            $this->sewa->save([
                'id_kamar' => $id,
                // 'id_penghuni' => session()->get('id'), // ID user yang login
                'tanggal_mulai' => $tanggalAwal,
                'tanggal_akhir' => $tanggalAkhir 
            ]);

            // Update status kamar menjadi 1 (Terpakai)
            $this->kamar->update($id, [
                'status' => 1,
                'id_user' =>(user()->id) // Sesuaikan dengan ID user yang login
            ]);

            // Redirect dengan pesan sukses
            session()->setFlashdata('message', 'Berhasil masuk kamar. Penyewaan dicatat selama 30 hari.');
            return redirect()->to(base_url('list-kamar'));
        }

        // Tampilkan view form masuk kamar jika bukan POST
        $data = [
            'title' => 'Masuk Kamar',
            'kamar' => $kamar
        ];

        echo view('template/headerPenghuni', $data);
        echo view('masuk_kamar', $data);
        echo view('template/footer');
    }

    
    public function detailKamar($id)
    {
        // Ambil data kamar berdasarkan ID
        $kamar = $this->kamar->find($id);

        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Kamar dengan ID $id tidak ditemukan.");
        }

        // Kirim data ke view
        $data = [
            'title' => 'Detail Kamar',
            'kamar' => $kamar
        ];

        echo view('template/headerPenghuni', $data);
        echo view('detail_kamar', $data);
        echo view('template/footer');
    }


}
