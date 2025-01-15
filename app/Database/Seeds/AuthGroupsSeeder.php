<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk tabel auth_groups
        $authGroupsData = [
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
        $this->db->table('auth_groups')->insertBatch($authGroupsData);

        // Seeder untuk tabel users
        $usersData = [
            [
                'email'            => 'user1@example.com',
                'username'         => 'user1',
                'nama'             => 'Tidak Berpenghuni',
                'no_telpon'        => '081234567890',
                'password_hash'    => password_hash('password123', PASSWORD_BCRYPT),
                'reset_hash'       => null,
                'reset_at'         => null,
                'reset_expires'    => null,
                'activate_hash'    => null,
                'status'           => 'active',
                'status_message'   => 'Account is active',
                'active'           => 1,
                'force_pass_reset' => 0,
                'deleted_at'       => null,
            ],
        ];

        // Insert batch data ke tabel users
        $this->db->table('users')->insertBatch($usersData);
    }
}
