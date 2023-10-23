<?php

namespace App\Database\Seeds;

use App\Models\ModelUser;
use CodeIgniter\Database\Seeder;

class DataUser extends Seeder
{
    public function run()
    {
        $modelUser = new ModelUser();
        $data_tu = [
            'user_username' => 'admin',
            'user_password' => md5('12345678'),
            'user_name' => 'Farah Maryati',
            'user_role_id' => '1'
        ];
        $data_kepsek = [
            'user_username' => 'kepsek',
            'user_password' => md5('12345678'),
            'user_name' => 'Adika Nugroho',
            'user_role_id' => '2'
        ];
        $data_guru = [
            'user_username' => 'guru',
            'user_password' => md5('12345678'),
            'user_name' => 'Lutfan Maulana',
            'user_role_id' => '3'
        ];
        $modelUser->insert($data_tu);
        $modelUser->insert($data_kepsek);
        $modelUser->insert($data_guru);
    }
}
