<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Init extends Seeder
{
    public function run()
    {
        try {
            $dtRole = new DataRole($this->config);
            $dtRole->run();
            print("     * Insert data role berhasil\n");
        } catch (\Throwable $th) {
            print("     * Insert data role gagal (" . $th->getMessage() . ")\n");
        }
        try {
            $dtKelas = new DataKelas($this->config);
            $dtKelas->run();
            print("     * Insert data kelas berhasil\n");
        } catch (\Throwable $th) {
            print("     * Insert data kelas gagal (" . $th->getMessage() . ")\n");
        }
    }
}
