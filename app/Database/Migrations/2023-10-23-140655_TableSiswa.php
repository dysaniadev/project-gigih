<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'siswa_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'siswa_user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'unique'         => true
            ],
            'siswa_nis' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'unique'    => true
            ],
            'siswa_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'siswa_tempat_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'siswa_tanggal_lahir' => [
                'type'       => 'date'
            ],
            'siswa_jk' => [
                'type'       => 'ENUM',
                'constraint' => '"Laki-Laki","Perempuan"',
            ],
            'siswa_agama' => [
                'type'       => 'ENUM',
                'constraint' => '"Islam","Kristen","Katolik","Hindu","Buddha","Khonghucu"',
            ],
            'siswa_alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'siswa_th_angkatan' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'siswa_kelas_sekarang' => [
                'type'           => 'TINYINT',
                'unsigned'       => true,
            ],
            'siswa_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'siswa_deleted_at' => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'siswa_deleted_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'siswa_updated_at' => [
                'type'       => 'datetime',
                'null'           => true
            ],
            'siswa_updated_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
            'siswa_created_at' => [
                'type'       => 'datetime',
                'null'           => true
            ],
            'siswa_created_by' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null'           => true
            ],
        ]);
        $this->forge->addKey('siswa_id', true);
        $this->forge->addForeignKey('siswa_user_id', 'tb_user', 'user_id', 'restrict', 'restrict', 'siswa_user_reference');
        $this->forge->addForeignKey('siswa_kelas_sekarang', 'tb_kelas', 'kelas_id', 'restrict', 'restrict', 'siswa_kelas_reference');
        $this->forge->addForeignKey('siswa_created_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'siswa_creator_reference');
        $this->forge->addForeignKey('siswa_updated_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'siswa_editor_reference');
        $this->forge->addForeignKey('siswa_deleted_by', 'tb_karyawan', 'karyawan_id', 'restrict', 'restrict', 'siswa_blocker_reference');
        $this->forge->createTable('tb_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tb_siswa');
    }
}
