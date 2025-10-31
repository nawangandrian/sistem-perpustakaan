<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_lengkap' => 'Administrator',
            'email'        => 'admin@perpus.test',
            'password'     => password_hash('admin123', PASSWORD_DEFAULT),
            'role'         => 'admin',
            'created_at'   => date('Y-m-d H:i:s')
        ];

        $this->db->table('users')->insert($data);
    }
}
