<?php

namespace App\Models;

use codeigniter\model;
class AgendamentosModel extends Model {
    protected $table      = 'agendamentos';
    protected $primaryKey = 'Id_agendamento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //objeto
    protected $useSoftDeletes = true;

    protected $allowedFields = ['paciente_id', 'profissional_id', 'Tipo_Consulta', 'Valor', 'Agendamento', 'Horario', 'Status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



}