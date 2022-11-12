<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_orderan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'berat_orderan' => [
                'type'       => 'INT',
                'constraint' => '9',
            ],
            'jumlah_pemasukan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'delivery' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null' => 'true',
            ],
            'status_order' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'tanggal_nota' => [
                'type'       => 'DATE',
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
        $this->forge->addKey('id_orderan', true);
        $this->forge->createTable('nota');
    }

    public function down()
    {
        $this->forge->dropTable('nota');
    }
}
