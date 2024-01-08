<?php

namespace App\Database\Seeds;

use App\Models\ModelUser;
use CodeIgniter\Database\Seeder;

class Backup extends Seeder
{
    public function run()
    {
        $this->puts(new ModelUser());
    }

    private function puts($obj)
    {
        $file = __DIR__ . '/backup' . '/' . $obj->backupkey . '.json';
        try {
            unlink($file);
        } catch (\Throwable $th) {
        }

        file_put_contents($file, json_encode($obj->findAll()));
    }
}
