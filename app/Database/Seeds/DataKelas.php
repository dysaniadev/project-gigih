<?php

namespace App\Database\Seeds;

use App\Models\ModelKelas;
use CodeIgniter\Database\Seeder;

class DataKelas extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kelas_id' => '1',
                'kelas_grade' => '7',
                'kelas_nama' => 'A'
            ],
            [
                'kelas_id' => '2',
                'kelas_grade' => '7',
                'kelas_nama' => 'B'
            ],
            [
                'kelas_id' => '3',
                'kelas_grade' => '7',
                'kelas_nama' => 'C'
            ],
            [
                'kelas_id' => '4',
                'kelas_grade' => '8',
                'kelas_nama' => 'A'
            ],
            [
                'kelas_id' => '5',
                'kelas_grade' => '8',
                'kelas_nama' => 'B'
            ],
            [
                'kelas_id' => '6',
                'kelas_grade' => '8',
                'kelas_nama' => 'C'
            ],
            [
                'kelas_id' => '7',
                'kelas_grade' => '9',
                'kelas_nama' => 'A'
            ],
            [
                'kelas_id' => '8',
                'kelas_grade' => '9',
                'kelas_nama' => 'B'
            ],
            [
                'kelas_id' => '9',
                'kelas_grade' => '9',
                'kelas_nama' => 'C'
            ],
        ];
        $modelKelas = new ModelKelas();
        foreach ($data as $dt) {
            $modelKelas->insert($dt);
        }
    }
}
