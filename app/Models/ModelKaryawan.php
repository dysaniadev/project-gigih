<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model
{
    protected $table            = 'tb_karyawan';
    protected $primaryKey       = 'karyawan_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'karyawan_id',
        'karyawan_user_id',
        'karyawan_nip',
        'karyawan_nama',
        'karyawan_email',
        'karyawan_foto',
        'karyawan_created_by',
        'karyawan_updated_by',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $useSoftDeletes   = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'karyawan_created_at';
    protected $updatedField  = 'karyawan_updated_at';
    protected $deletedField  = 'karyawan_deleted_at';
    public $backupkey = "karyawan";
}
