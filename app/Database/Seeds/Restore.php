<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Restore extends Seeder
{
    public function run()
    {
        // Run Seed for Fix data
        try {
            $dataRole = new DataRole($this->config);
            $dataRole->run();
            print("Restore data role berhasil\n\n");
        } catch (\Throwable $th) {
            print("Restore data role gagal\n\n");
        }

        try {
            $dataKelas = new DataKelas($this->config);
            $dataKelas->run();
            print("Restore data kelas berhasil\n\n");
        } catch (\Throwable $th) {
            print("Restore data kelas gagal\n\n");
        }
    }

    private function restore($model)
    {
        try {
            $file = __DIR__ . '/backup/' . $model->backupkey . '.json';
            foreach (json_decode(file_get_contents($file), true) as $dt) {
                $model->insert($dt);
            }
            print("Restore " . $model->backupkey . " Berhasil\n\n");
        } catch (\Throwable $th) {
            print("Restore " . $model->backupkey . " Gagal : " . $th->getMessage() . "\n\n");
        }
    }
}
