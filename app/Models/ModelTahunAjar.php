<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTahunAjar extends Model
{
    protected $table            = 'tb_tahun_ajar';
    protected $primaryKey       = 'ta_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ta_id',
        'ta_nama',
        'ta_updated_by',
        'ta_created_by',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ta_created_at';
    protected $updatedField  = 'ta_updated_at';

    public function getTANow()
    {
        return $this->orderBy('ta_id', 'desc')->first();
    }

    public function isFinished(): bool
    {
        $semester = new ModelSemester();
        if (empty($this->getTANow())) {
            return true;
        }
        $dt = $semester->where('smt_th_id', $this->getTANow()['th_id'])->where('smt_nama', '2')->first();
        if (!is_null($dt['smt_finish_at'])) {
            return true;
        }
        return false;
    }
    public $backupkey = "tahunajar";
}
