<?php

namespace App\Models;

use CodeIgniter\Model;

class PacientesModel extends Model
{
    protected $table      = 'pacientes';
    protected $primaryKey = 'Id_Paciente';

    protected $useAutoIncrement = true;

    protected $returnType     =  'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nome_Paciente', 'CPF', 'Data_Nascimento', 'CEP', 'Logradouro', 'Bairro', 'Cidade', 'UF', 'Numero', 'Complemento', 'Telefone', 'OBS'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}
    