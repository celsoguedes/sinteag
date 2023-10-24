<?php

namespace App\Models;

use CodeIgniter\model;

class AgendamentosModel extends Model
{
    protected $table      = 'agendamentos';
    protected $primaryKey = 'Id_Agendamento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //objeto
    protected $useSoftDeletes = false;

    protected $allowedFields = ['paciente_id', 'profissional_id', 'Tipo_Consulta', 'Valor', 'Agendamento', 'Horario', 'Estado'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
