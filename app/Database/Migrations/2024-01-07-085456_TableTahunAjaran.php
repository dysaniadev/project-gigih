<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableTahunAjaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ta_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ta_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'ta_updated_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'ta_updated_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'ta_created_at' => [
                'type'       => 'datetime',
                'null'           => true
            ],
            'ta_created_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
        ]);
        $this->forge->addKey('ta_id', true);
        $this->forge->addForeignKey('ta_created_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'ta_creator_reference');
        $this->forge->addForeignKey('ta_updated_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'ta_editor_reference');
        $this->forge->createTable('tb_tahun_ajar');
    }

    public function down()
    {
        $this->forge->dropTable('tb_tahun_ajar');
    }
}
