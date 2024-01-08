<?php

namespace App\Database\Seeds;

use App\Models\ModelKaryawan;
use CodeIgniter\Database\Seeder;

class DataKaryawan extends Seeder
{
    public function run()
    {
        $data = [
            [ // Data petugas TU
                'karyawan_user_id' => '1',
                'karyawan_nip' => '19208037',
                'karyawan_nama' => 'Farah Maryati',
                'karyawan_email' => 'farah.maryati082@gmail.com',
            ],
            [ // Data Guru
                'karyawan_user_id' => '2',
                'karyawan_nip' => '3890238223',
                'karyawan_nama' => 'Adika Nugroho',
                'karyawan_email' => 'andikanugroho17@gmail.com',
            ],
        ];
        $model =  new ModelKaryawan();
        $success = 0;
        foreach ($data as $dt) {
            try {
                $model->insert($dt);
                $success++;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        print("     * Insert data karyawan berhasil ($success data)\n");
    }
}
