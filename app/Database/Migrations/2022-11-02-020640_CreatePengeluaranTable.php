<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengeluaranTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengeluaran' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_pengeluaran' => [
                'type'       => 'DATE',
            ],
            'jumlah_pengeluaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ket_pengeluaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'employee_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_pengeluaran', true);
        $this->forge->createTable('pengeluaran');
    }

    public function down()
    {
        $this->forge->dropTable('pengeluaran');
    }
}
