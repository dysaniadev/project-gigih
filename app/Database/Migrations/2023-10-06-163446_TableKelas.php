<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kelas_id' => [
                'type'           => 'TINYINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kelas_grade' => [
                'type'       => 'enum',
                'constraint' => '"7","8","9"',
            ],
            'kelas_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ]
        ]);
        $this->forge->addKey('kelas_id', true);
        $this->forge->createTable('tb_kelas');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kelas');
    }
}
