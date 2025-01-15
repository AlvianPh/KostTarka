<?php

namespace App\Controllers;

use App\Models\Kamar;
use App\Models\BuktiBayar;

class Pembayaran extends BaseController
{
    protected $kamar;
    protected $bukti;

    public function __construct()
    {
        $this->kamar = new Kamar(); // Model untuk tabel kamar
        $this->bukti = new BuktiBayar(); // Model untuk tabel bukti
        helper(['form']);
    }

    public function index()
    {
        // Ambil daftar nama_kamar dari tabel kamar
        $daftarKamar = $this->kamar->findAll();

        $data = [
            'title' => 'Pembayaran',
            'daftarKamar' => $daftarKamar, // Kirim daftar kamar ke view
        ];

        // Tampilkan view form pembayaran
        echo view('template/headerPenghuni', $data);
        echo view('pembayaran', $data); 
        echo view('template/footer');
    }

    public function prosesPembayaran()
    {
        if ($this->request->getMethod() === 'POST') {
            // Ambil semua nama_kamar dari tabel kamar
            $daftarNamaKamar = array_column($this->kamar->findAll(), 'nama_kamar');

            // Validasi input form
            $validationRules = [
                'nomer_kamar' => 'required',
                'nama_penghuni' => 'required',
                'jumlah' => 'required|numeric',
                'foto_bukti' => 'uploaded[foto_bukti]|max_size[foto_bukti,2048]|is_image[foto_bukti]|mime_in[foto_bukti,image/jpg,image/jpeg,image/png]',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Ambil data dari input form
            $nomerKamar = $this->request->getPost('nomor_kamar');
            $namaPenghuni = $this->request->getPost('nama_penghuni');
            $jumlah = $this->request->getPost('jumlah');
            $tanggal = date('Y-m-d'); // Tanggal sekarang dari server
            $status = 0; // Status default = 0 (belum diverifikasi)

            // Proses upload foto bukti
            $file = $this->request->getFile('foto_bukti');
            $fileName = $file->getRandomName(); // Generate nama file acak
            $file->move('uploads/bukti', $fileName); // Simpan file ke folder uploads/bukti
            // Simpan data ke database
            $this->bukti->save([
                'id_kamar' => $nomerKamar,
                'jumlah' => $jumlah,
                'tanggal' => $tanggal, // Masukkan tanggal otomatis
                'status' => $status,    
                'nama_penghuni' => $namaPenghuni,
                'foto_bukti' => $fileName,
            ]);

            // Redirect dengan pesan sukses
            session()->setFlashdata('message', 'Pembayaran berhasil disimpan.');
            return redirect()->to(base_url('pembayaran'));
        }

    }

    public function getHarga()
    {
            $idKamar = $this->request->getVar('id_kamar');
            log_message('debug', 'ID Kamar diterima: ' . $idKamar);
            if (!$idKamar) {
                log_message('error', 'ID Kamar kosong!');
                return $this->response->setJSON(['error' => 'ID Kamar tidak valid']);
            }

            $kamar = $this->kamar->getById($idKamar);
            

            if ($kamar) {
                log_message('debug', 'Harga ditemukan: ' . $kamar['harga']);
                return $this->response->setJSON(['harga' => $kamar['harga']]);
            } else {
                log_message('error', 'Harga tidak ditemukan untuk ID Kamar: ' . $idKamar);
                return $this->response->setJSON(['harga' => 0]);
            }
}


}
