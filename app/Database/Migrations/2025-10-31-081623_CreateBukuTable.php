<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_buku' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'judul_buku' => ['type' => 'VARCHAR', 'constraint' => 150],
            'id_kategori' => ['type' => 'INT', 'unsigned' => true],
            'id_penulis' => ['type' => 'INT', 'unsigned' => true],
            'tahun_terbit' => ['type' => 'YEAR'],
            'stok' => ['type' => 'INT'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id_buku', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_penulis', 'penulis', 'id_penulis', 'CASCADE', 'CASCADE');
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
