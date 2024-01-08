<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_username' => [
                'type' => 'VARCHAR',
                'constraint' => '16'
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '32'
            ],
            'user_role_id' => [
                'type' => 'TINYINT',
                'unsigned' => true,
            ],
            'user_created_at' => [
                'type' => 'datetime'
            ],
            'user_updated_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'user_deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->addForeignKey('user_role_id', 'tb_role', 'role_id', 'restrict', 'restrict', 'fk_role_user');
        $this->forge->createTable('tb_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
