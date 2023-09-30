<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModels extends Model
{

    protected $table      = 'empleados';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id',
        'code',
        'name',
        'surname',
        'identity',
        'address',
        'telephone',
        'photo_id'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'delete_at';


}
