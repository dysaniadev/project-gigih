<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataRole extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role_name' => 'Petugas TU'
            ],
            [
                'role_name' => 'Kepala Sekolah'
            ],
            [
                'role_name' => 'Guru'
            ],
        ];
        foreach ($data as $dt) {
            $this->db->table('tb_role')->insert($dt);
        }
    }
}
