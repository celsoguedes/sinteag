<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;
use App\Models\PacientesModel;

class CadastrarConsultas extends BaseController
{
    private $db;
    protected $helpers = ['form'];

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
            'erro' => $this->session->getFlashdata('erro')
        ];
        return view('cadastrarconsultas', $data);
    }
    public function cadastrar()
    {
    
        $db = \config\Database::connect();

        $regras_validacao = [
            'Id_Paciente' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'Id_Profissional' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'tipoConsulta' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'valor' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'data' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'horario' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'estado_consulta' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
        ];

        if (!$this->validate($regras_validacao)) {
            return redirect()->to('/public/CadastrarConsultas')->withInput();
        }


        $data = [
            'paciente_id' => $_POST['Id_Paciente'],
            'profissional_id ' => $_POST['Id_Profissional'],
            'Tipo_Consulta' => $_POST['tipoConsulta'],
            'Valor' => $_POST['valor'],
            'agendamento' => $_POST['data'],
            'horario' => $_POST['horario'],
            'Estado' => $_POST['estado_consulta'],
        ];
        $verify = $db->table('agendamentos')->select('agendamento, horario')
        ->where('profissional_id', $_POST['Id_Profissional'])
        ->where('agendamento', $_POST['data'])
        ->where('horario', $_POST['horario'])
        ->get()->getResult();

        if (empty($verify)) {
            $db->table('agendamentos')->insert($data);
            $this->session->setFlashdata('sucesso', 'Agendamento cadastrado com sucesso!');
            return redirect()->to('/public/PesquisarConsultas');
        } else {
            $this->session->setFlashdata('erro', 'Erro, horário já agendado!');
            return redirect()->to('/public/CadastrarConsultas');
        }
    }
}
