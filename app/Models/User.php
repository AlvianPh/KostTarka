<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'username', 'password_hash', 'no_telpon'];


    public function rules()
    {
        return [
            'nama' => [
                'label' => 'nama',
                'rules' => 'trim|required'
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'trim|required'
            ],
            'password_hash' => [
                'label' => 'password_hash',
                'rules' => 'trim|required'
            ],
            'no_telpon' => [
                'label' => 'no_telpon',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
