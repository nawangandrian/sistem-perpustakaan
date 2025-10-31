<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenulisTable extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_penulis' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nama_penulis' => ['type' => 'VARCHAR', 'constraint' => 100],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id_penulis', true);
        $this->forge->createTable('penulis');
    }

    public function down()
    {
        $this->forge->dropTable('penulis');
    }
}
