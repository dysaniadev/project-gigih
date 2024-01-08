<?php

namespace App\Database\Seeds;

use App\Models\ModelSiswa;
use CodeIgniter\Database\Seeder;

class DataSiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'siswa_user_id' => '3',
                'siswa_nis' => '6028',
                'siswa_nama' => 'Lutfan Maulana',
                'siswa_tempat_lahir' => 'Yogyakarta',
                'siswa_tanggal_lahir' => '2000-12-12',
                'siswa_jk' => 'Laki-Laki',
                'siswa_agama' => 'Islam',
                'siswa_alamat' => 'Yogyakarta',
                'siswa_th_angkatan' => '2019',
                'siswa_kelas_sekarang' => '1',
            ]
        ];
        $modelSiswa = new ModelSiswa();
        $success = 0;
        foreach ($data as $dt) {
            try {
                $modelSiswa->insert($dt);
                $success++;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        print("     * Insert data siswa berhasil ($success data)\n");
    }
}
