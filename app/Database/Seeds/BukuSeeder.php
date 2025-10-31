<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul_buku' => 'Belajar PHP untuk Pemula',
                'id_kategori' => 1, // Teknologi
                'id_penulis' => 1,  // Ahmad Fauzi
                'tahun_terbit' => '2021',
                'stok' => 10,
            ],
            [
                'judul_buku' => 'Cerita Fiksi Nusantara',
                'id_kategori' => 2, // Fiksi
                'id_penulis' => 2,  // Siti Rahma
                'tahun_terbit' => '2020',
                'stok' => 5,
            ],
            [
                'judul_buku' => 'Sejarah Indonesia Modern',
                'id_kategori' => 3, // Sejarah
                'id_penulis' => 3,  // Budi Santoso
                'tahun_terbit' => '2019',
                'stok' => 7,
            ],
        ];

        $this->db->table('buku')->insertBatch($data);
    }
}
