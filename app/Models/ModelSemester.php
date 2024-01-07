<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSemester extends Model
{
    protected $table            = 'tb_semester';
    protected $primaryKey       = 'smt_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'smt_id',
        'smt_nama',
        'smt_start_at',
        'smt_finish_at',
        'smt_ta_id',
        'created_at',
        'updated_at',
    ];

    public $backupkey = "semester";

    public function getActiveSemester()
    {
        $modelTA = new ModelTahunAjar();
        $dtTA = $modelTA->getTANow();
        if (empty($dtTA)) {
            return null;
        }
        return $this->where('smt_ta_id', $dtTA['ta_id'])
            ->where('smt_start_at is not null')
            ->where('smt_finish_at is null')
            ->first();
    }
}
