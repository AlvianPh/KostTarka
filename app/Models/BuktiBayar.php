<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktiBayar extends Model
{
    protected $table = 'bukti';
    protected $primaryKey = 'id_bukti';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kamar','jumlah', 'tanggal', 'status', 'nama', 'foto_bukti'];


    public function rules()
    {
        return [
            'jumlah' => [
                'label' => 'jumlah',
                'rules' => 'trim|required'
            ],
            'tanggal' => [
                'label' => 'tanggal',
                'rules' => 'trim|required'
            ],
            'status' => [
                'label' => 'status',
                'rules' => 'trim|required'
            ],
            'nama' => [
                'label' => 'nama_penghuni',
                'rules' => 'trim|required'
            ],
            'foto_bukti' => [
                'label' => 'foto_bukti',
                'rules' => 'trim|required'
            ],
            'nama_kamar' => [
                'label' => 'nama_kamar',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_bukti', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_bukti' => $id])->first();
    }

    public function getLaporan($awal, $akhir)
    {
    return $this->where('tanggal >=', $awal)
                ->where('tanggal <=', $akhir)
                ->orderBy('tanggal', 'ASC')
                ->findAll();
    }

}
