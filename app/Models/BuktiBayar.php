<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktiBayar extends Model
{
    protected $table = 'bukti';
    protected $primaryKey = 'id_bukti';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_penghuni','jumlah', 'tanggal', 'status', 'id_kamar', 'foto_bukti'];


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
            'nama_penghuni' => [
                'label' => 'nama_penghuni',
                'rules' => 'trim|required'
            ],
            'foto_bukti' => [
                'label' => 'foto_bukti',
                'rules' => 'trim|required'
            ],
            'id_kamar' => [
                'label' => 'id_kamar',
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
    return $this->select('bukti.*, kamar.*, bukti.status AS status_bukti, kamar.status AS status_kamar')
                ->join('kamar', 'bukti.id_kamar = kamar.id_kamar')
                ->where('tanggal >=', $awal)
                ->where('tanggal <=', $akhir)
                ->orderBy('tanggal', 'ASC')
                ->findAll();
    }
    public function getPembayaran(){
        return $this->select('bukti.*, kamar.*, bukti.status AS status_bukti, kamar.status AS status_kamar')
        ->join('kamar', 'bukti.id_kamar = kamar.id_kamar')
        ->where(['bukti.status' => 0])
        ->orderBy('id_bukti', 'ASC')
        ->findAll();
    }
    public function getPembayaranSuccess(){
        return $this->select('bukti.*, kamar.*, bukti.status AS status_bukti, kamar.status AS status_kamar')
        ->join('kamar', 'bukti.id_kamar = kamar.id_kamar')
        ->where(['bukti.status' => 1])
        ->orderBy('id_bukti', 'ASC')
        ->findAll();
    }

}
