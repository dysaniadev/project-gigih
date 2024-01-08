<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKaryawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'karyawan_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'karyawan_user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'unique'         => true
            ],
            'karyawan_nip' => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
                'unique'    => true
            ],
            'karyawan_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'karyawan_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true
            ],
            'karyawan_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true
            ],
            'karyawan_deleted_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'karyawan_deleted_by' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'karyawan_updated_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'karyawan_updated_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'karyawan_created_at' => [
                'type'       => 'datetime',
                'null'           => true
            ],
            'karyawan_created_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
        ]);
        $this->forge->addKey('karyawan_id', true);
        $this->forge->addForeignKey('karyawan_user_id', 'tb_user', 'user_id', 'restrict', 'restrict', 'karyawan_user_reference');
        $this->forge->addForeignKey('karyawan_created_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'karyawan_creator_reference');
        $this->forge->addForeignKey('karyawan_updated_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'karyawan_editor_reference');
        $this->forge->addForeignKey('karyawan_deleted_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'karyawan_blocker_reference');
        $this->forge->createTable('tb_karyawan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_karyawan');
    }
}
