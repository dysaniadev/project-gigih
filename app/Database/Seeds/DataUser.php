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
            'user_id' => '1',
            'user_username' => 'admin',
            'user_password' => md5('12345678'),
            'user_role_id' => '1'
        ];
        $data_guru = [
            'user_id' => '2',
            'user_username' => 'guru',
            'user_password' => md5('12345678'),
            'user_role_id' => '2'
        ];
        $data_siswa = [
            'user_id' => '3',
            'user_username' => 'siswa',
            'user_password' => md5('12345678'),
            'user_role_id' => '3'
        ];
        $success = 0;
        try {
            $modelUser->insert($data_tu);
            $success++;
        } catch (\Throwable $th) {
            //throw $th;
        }
        try {
            $modelUser->insert($data_guru);
            $success++;
        } catch (\Throwable $th) {
            //throw $th;
        }
        try {
            $modelUser->insert($data_siswa);
            $success++;
        } catch (\Throwable $th) {
            //throw $th;
        }
        if ($success > 0) {
            print("     * Insert data user berhasil ($success data)\n");
        } else {
            print("     * Insert data user gagal\n");
        }
    }
}
