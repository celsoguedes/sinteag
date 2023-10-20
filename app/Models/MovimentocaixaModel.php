<?php

namespace App\Models;

use codeigniter\model;
class MovimentocaixaModel extends Model {
    protected $table      = 'movimentocaixa';
    protected $primaryKey = 'Id_Caixa';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //objeto
    protected $useSoftDeletes = true;

    protected $allowedFields = ['data', 'histórico', 'entradas', 'saidas'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



}