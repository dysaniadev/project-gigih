<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitAllDummy extends Seeder
{
    public function run()
    {
        $init = new Init($this->config);
        $init->run();

        try {
            $dt = new DataUser($this->config);
            $dt->run();
        } catch (\Throwable $th) {
            print("     * Insert data role gagal (" . $th->getMessage() . ")\n");
        }

        try {
            $dt = new DataSiswa($this->config);
            $dt->run();
        } catch (\Throwable $th) {
            print("     * Insert data siswa gagal (" . $th->getMessage() . ")\n");
        }

        try {
            $dt = new DataKaryawan($this->config);
            $dt->run();
        } catch (\Throwable $th) {
            print("     * Insert data karyawan gagal (" . $th->getMessage() . ")\n");
        }
    }
}
