<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email', 'password', 'no_hp', 'role'];


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
                'password' => [
                    'label' => 'password',
                    'rules' => 'trim|required'
                ],
                'no_hp' => [
                    'label' => 'no_hp',
                    'rules' => 'trim|required'
                ],
                'role' => [
                    'label' => 'role',
                    'rules' => 'trim|required'
                ]
        ];
        
    }

    public function getAll()
    {
        return $this->orderBy('id_user', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_user' => $id])->first();
    }
}