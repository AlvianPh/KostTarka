<?php

namespace App\Models;

use CodeIgniter\Model;

class Sewa extends Model
{
    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';
    protected $allowedFields = ['id_kamar', 'tanggal_mulai', 'tanggal_akhir'];

    public function rules()
    {
        return [
            'id_kamar' => [
                'label' => 'id_kamar',
                'rules' => 'trim|required'
            ],
            'tanggal_awal' => [
                'label' => 'tanggal_mulai',
                'rules' => 'trim|required'
            ],
            'tanggal_akhir' => [
                'label' => 'tanggal_akhir',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_sewa', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_sewa' => $id])->first();
    }
}
