<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemasukanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemasukan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_pemasukan' => [
                'type'       => 'DATE',
            ],
            'jumlah_pemasukan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'saldo' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'ket_pemasukan' => [
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
        $this->forge->addKey('id_pemasukan', true);
        $this->forge->createTable('pemasukan');
    }

    public function down()
    {
        $this->forge->dropTable('pemasukan');
    }
}
