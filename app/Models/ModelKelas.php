<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table            = 'tb_kelas';
    protected $primaryKey       = 'kelas_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kelas_id', 'kelas_grade', 'kelas_nama'];

    private $classFlow = [
        7 => 8,
        8 => 9,
    ];

    public function getClassFlow(): array
    {
        return $this->classFlow;
    }
}
