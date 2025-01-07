<?php

namespace App\Controllers;

use App\Models\Kamar;

class ManajemenKamar extends BaseController
{

    protected $kamar;

    public function __construct()
    {
        $this->kamar = new Kamar();
        helper(['form']);
    }

    public function index()
    {   
        $data = [
            'title' => 'Kamar',
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
            'name' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required|in_list[0,1]', // 0 untuk tidak aktif, 1 untuk aktif
            'token' => 'required',
            'foto_kamar' => 'uploaded[foto_kamar]|max_size[foto_kamar,2048]|is_image[foto_kamar]|mime_in[foto_kamar,image/jpg,image/jpeg,image/gif,image/png]',
            'fasilitas_kamar' => 'required',
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('tambah_kamar'))->withInput()->with('validation', $this->validator);
        }
        $fotoKamar = $this->request->getFile('foto_kamar');
        $fotoKamar->move('public/uploads'); // Pastikan folder 'uploads' ada
        $namaFile = $fotoKamar->getName();

        $this->kamar->save([
            "nama_kamar" => strtoupper($this->request->getVar('nama_kamar')),
            "harga" => $this->request->getVar('harga'),
            "status" => $this->request->getVar('status'),
            "token" => $this->request->getVar('token'),
            "foto_kamar" => $namaFile,
            "fasilitas_kamar" => $this->request->getVar('fasilitas_kamar'),
     
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('manajemen_kamar'));
    }
}
