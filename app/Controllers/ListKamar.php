<?php

namespace App\Controllers;

use App\Models\Kamar;

class ListKamar extends BaseController
{
    protected $kamar;

    public function __construct()
    {
        $this->kamar = new Kamar();
        helper(['form']);
    }

    public function index()
    {
        // Ambil data kamar
        $data = [
            'title' => 'Daftar Kamar',
            'kamarList' => $this->kamar->findAll(), // Ambil semua data kamar
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
}
