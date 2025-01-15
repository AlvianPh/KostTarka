<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'pemilik',
                'description' => 'role pemilik',
            ],
            [
                'name'        => 'penghuni',
                'description' => 'role penghuni',
            ],
        ];

        // Insert data ke tabel auth_groups
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
