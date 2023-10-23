<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableRole extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id' => [
                'type' => 'TINYINT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'role_name' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ]
        ]);
        $this->forge->addKey('role_id', true);
        $this->forge->createTable('tb_role');
    }

    public function down()
    {
        $this->forge->dropTable('tb_role');
    }
}
