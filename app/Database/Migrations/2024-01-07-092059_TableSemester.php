<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSemester extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'smt_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'smt_nama' => [
                'type'       => 'ENUM',
                'constraint' => '"1","2"',
            ],
            'smt_start_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'smt_finish_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'smt_ta_id' => [
                'type'           => 'INT',
                'unsigned'       => true
            ],
            'smt_updated_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'smt_updated_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'smt_created_at' => [
                'type'       => 'datetime',
                'null'           => true
            ],
            'smt_created_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
        ]);
        $this->forge->addKey('smt_id', true);
        $this->forge->addForeignKey('smt_ta_id', 'tb_tahun_ajar', 'ta_id', 'restrict', 'restrict', 'smt_tahun_ajar_reference');
        $this->forge->addForeignKey('smt_created_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'smt_creator_reference');
        $this->forge->addForeignKey('smt_updated_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'smt_editor_reference');
        $this->forge->createTable('tb_semester');
    }

    public function down()
    {
        $this->forge->dropTable('tb_semester');
    }
}
