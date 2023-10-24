<?php

namespace App\Models;

use codeigniter\model;

class UsuariosModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'Id_Usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //objeto
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario', 'senha'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
