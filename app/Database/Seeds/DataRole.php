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
                'role_name' => 'Guru'
            ],
            [
                'role_name' => 'Siswa'
            ],
        ];
        foreach ($data as $dt) {
            $this->db->table('tb_role')->insert($dt);
        }
    }
}
