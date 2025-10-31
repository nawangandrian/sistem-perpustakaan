<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Fiksi'],
            ['nama_kategori' => 'Sejarah'],
        ];
        $this->db->table('kategori')->insertBatch($data);
    }
}
