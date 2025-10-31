<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_penulis' => 'Ahmad Fauzi',
                'email' => 'ahmad@example.com',
            ],
            [
                'nama_penulis' => 'Siti Rahma',
                'email' => 'siti@example.com',
            ],
            [
                'nama_penulis' => 'Budi Santoso',
                'email' => 'budi@example.com',
            ],
        ];

        $this->db->table('penulis')->insertBatch($data);
    }
}
