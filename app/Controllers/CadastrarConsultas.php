<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;
use App\Models\PacientesModel;

class CadastrarConsultas extends BaseController
{
    private $db;

    function __construct()
    {
        $this->db = \config\Database::connect();
    }
    //public function index(): string
    public function index()
    {
        $db = \config\Database::connect();
        $pacientes = $db->query('select Id_Paciente, Nome_Paciente FROM pacientes')->getResultArray();
        $profissionais = $db->query('select Id_Profissional, Nome_Profissional FROM profissional')->getResultArray();


        $data = [
            'titulo' => 'Cadastro de Consultas',
            'pacientes' => $pacientes,
            'profissionais' => $profissionais,
        ];
        return view('cadastrarconsultas', $data);
    }
    public function cadastrar()
    {

        $db = \config\Database::connect();

        $data = [
            'paciente_id' => $_POST['Id_Paciente'],
            'profissional_id ' => $_POST['Id_Profissional'],
            'Tipo_Consulta' => $_POST['tipoConsulta'],
            'Valor' => $_POST['valor'],
            'agendamento' => $_POST['data'],
            'horario' => $_POST['horario'],
            'Estado' => $_POST['estado_consulta'],
        ];

        $db->table('agendamentos')->insert($data);
        return redirect()->to('/public/PesquisarConsultas');
    }
}
