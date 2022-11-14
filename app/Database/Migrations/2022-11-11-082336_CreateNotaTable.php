<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_order' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'berat_order' => [
                'type'       => 'INT',
                'constraint' => '9',
            ],
            'total_tagihan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_order' => [
                'type'       => 'DATE',
            ],
            'delivery' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null'       => true,
            ],
            'status_order' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => 'true',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => 'true',
            ],
        ]);
        $this->forge->addKey('id_order', true);
        $this->forge->createTable('nota');
    }

    public function down()
    {
        $this->forge->dropTable('nota');
    }
}
