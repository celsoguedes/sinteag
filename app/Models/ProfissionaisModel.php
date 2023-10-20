<?php

namespace App\Models;

use CodeIgniter\Model;
class ProfissionaisModel extends Model {
    protected $table      = 'profissional';
    protected $primaryKey = 'Id_Profissional';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //objeto
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nome_Profissional', 'Formacao','CPF', 'Data_Nascimento', 'Sexo', 'CEP', 'Logradouro', 'Bairro', 'Cidade', 'UF', 'Numero', 'Complemento', 'Telefone'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



}
