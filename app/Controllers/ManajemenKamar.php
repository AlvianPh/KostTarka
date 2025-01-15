<?php

namespace App\Controllers;

use App\Models\Kamar;
use App\Models\Sewa;

class ManajemenKamar extends BaseController
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
        $data = [
            'title' => 'Manajemen Kamar',
            'dataKamar' => $this->kamar->getAll(),
            'validation' => \Config\Services::validation(),
            'showModal' => session()->getFlashdata('showModal'),
            'editModal' => session()->getFlashdata('editModal')

        ];

        echo view('template/headerPemilik', $data);
        echo view('manajemen_kamar', $data);
        echo view(name: 'template/footer');
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Kamar',
        ];

        echo view('template/headerPemilik', $data);
        echo view('tambah_kamar');
        echo view(name: 'template/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'nama_kamar' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required|in_list[0,1]', // 0 untuk tidak aktif, 1 untuk aktif
            'token' => 'required',
            'foto_kamar' => 'uploaded[foto_kamar]|max_size[foto_kamar,2048]|is_image[foto_kamar]|mime_in[foto_kamar,image/jpg,image/jpeg,image/gif,image/png]',
            'fasilitas' => 'required',
        ])) {
          
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('tambah_kamar'))->withInput()->with('validation', $this->validator);
        }

        $fotoKamar = $this->request->getFile('foto_kamar');
        $fotoKamar->move('public/images/uploads'); // Pastikan folder 'uploads' ada
        $namaFile = $fotoKamar->getName();

        $this->kamar->save([
            "nama_kamar" => strtoupper($this->request->getVar('nama_kamar')),
            "harga" => $this->request->getVar('harga'),
            "status" => $this->request->getVar('status'),
            "token" => $this->request->getVar('token'),
            "foto_kamar" => $namaFile,
            "fasilitas" => $this->request->getVar('fasilitas'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('manajemen_kamar'));
    }

    public function getEditKamar($id)
    {
        $data = [
            'title' => 'Kamar',
            'kamar' => $this->kamar->getById($id),
        ];

        echo view('template/headerPemilik', $data);
        echo view('edit_kamar', $data);
        echo view(name: 'template/footer');
    }

    public function update($id)
    {
        // Ambil data kamar lama berdasarkan ID
        $kamar = $this->kamar->find($id);
        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data kamar dengan ID $id tidak ditemukan.");
        }

        // Validasi data
        if (!$this->validate([
            'nama_kamar' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required|in_list[0,1]', // 0 untuk tidak aktif, 1 untuk aktif
            'token' => 'required',
            'foto_kamar' => 'if_exist|uploaded[foto_kamar]|max_size[foto_kamar,2048]|is_image[foto_kamar]|mime_in[foto_kamar,image/jpg,image/jpeg,image/gif,image/png]',
            'fasilitas' => 'required',
        ])) {
            session()->setFlashdata('validation', $this->validator);
            return redirect()->back()->withInput();
        }

        // Proses unggah foto jika ada
        $namaFile = $kamar['foto_kamar']; // Gunakan foto lama secara default
        $fotoKamar = $this->request->getFile('foto_kamar');
        if ($fotoKamar && $fotoKamar->isValid()) {
            $fotoKamar->move('public/images/uploads');
            $namaFile = $fotoKamar->getName();

            // Hapus foto lama jika ada
            if (file_exists('images/uploads/' . $kamar['foto_kamar'])) {
                unlink('images/uploads/' . $kamar['foto_kamar']);
            }
        }

        // Update data kamar
        $this->kamar->update($id, [
            "nama_kamar" => strtoupper($this->request->getVar('nama_kamar')),
            "harga" => $this->request->getVar('harga'),
            "status" => $this->request->getVar('status'),
            "token" => $this->request->getVar('token'),
            "foto_kamar" => $namaFile,
            "fasilitas" => $this->request->getVar('fasilitas'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil diedit.');
        return redirect()->to(base_url('manajemen_kamar'));
    }


    public function delete($id)
{
    $kamar = $this->kamar->find($id);
    if (!$kamar) {
        session()->setFlashdata('error', 'Data tidak ditemukan.');
        return redirect()->to(base_url('manajemen_kamar'));
    }
        $this->kamar->delete($id);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to(base_url('manajemen_kamar'));
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
                // 'id_penghuni' => session()->get('user_id'), // ID user yang login
                'tanggal_mulai' => $tanggalAwal,
                'tanggal_akhir' => $tanggalAkhir 
            ]);

            // Update status kamar menjadi 1 (Terpakai)
            $this->kamar->update($id, [
                'status' => 1,
                // 'penghuni' => session()->get('user_id') // Sesuaikan dengan ID user yang login
            ]);

            // Redirect dengan pesan sukses
            session()->setFlashdata('message', 'Berhasil masuk kamar. Penyewaan dicatat selama 30 hari.');
            return redirect()->to(base_url('list_kamar'));
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
