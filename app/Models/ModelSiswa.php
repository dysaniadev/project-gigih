<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    protected $table            = 'tb_siswa';
    protected $primaryKey       = 'siswa_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'siswa_id',
        'siswa_user_id',
        'siswa_nis',
        'siswa_nama',
        'siswa_tempat_lahir',
        'siswa_tgl_lahir',
        'siswa_jk',
        'siswa_agama',
        'siswa_alamat',
        'siswa_th_angkatan',
        'siswa_kelas_sekarang',
        'siswa_foto',
        'siswa_updated_by',
        'siswa_created_by',
    ];

    protected $useSoftDeletes   = true;
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public $backupkey = "siswa";
}
