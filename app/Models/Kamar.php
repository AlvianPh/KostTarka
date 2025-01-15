<?php

namespace App\Models;

use CodeIgniter\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kamar', 'harga', 'status', 'token', 'foto_kamar', 'fasilitas'];


    public function rules()
    {
        return [
            'nama_kamar' => [
                'label' => 'nama_kamar',
                'rules' => 'trim|required'
            ],
            'harga' => [
                'label' => 'harga',
                'rules' => 'trim|required'
            ],
            'status' => [
                'label' => 'status',
                'rules' => 'trim|required'
            ],
            'token' => [
                'label' => 'token',
                'rules' => 'trim|required'
            ],
            'foto_kamar' => [
                'label' => 'foto_kamar',
                'rules' => 'trim|required'
            ],
            'fasilitas' => [
                'label' => 'fasilitas',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_kamar', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_kamar' => $id])->first();
    }
}
