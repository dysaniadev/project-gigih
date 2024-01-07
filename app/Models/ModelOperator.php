<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOperator extends Model
{
    protected $table            = 'tb_operator';
    protected $primaryKey       = 'op_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'op_id',
        'op_user_id',
        'op_nip',
        'op_nama',
        'op_email',
        'op_foto',
        'created_at',
        'updated_at',
    ];
}
