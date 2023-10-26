<?php

namespace App\Controllers;

use App\Models\PacientesModel;

class CadastrarPacientes extends BaseController
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

        //$PacientesModel = new PacientesModel();
        $data = ['titulo' => 'Cadastro de Paciente', 'cadastrarPacientes'];
        return view('cadastrarpacientes', $data);
    }

    public function cadastrar()
    {

        $regras_validacao = [
            'nome_paciente' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O nome do paciente é obrigatório',
                    'min_length' => 'O nome do paciente deve ter no mínimo 3 letras',
                ]
            ],
            'cpf' => 'required|is_unique[pacientes.CPF]',
            'data_nascimento' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'telefone' => 'required',
        ];

        if (!$this->validate($regras_validacao)) {
            return redirect()->to('/public/CadastrarPacientes')->withInput();
            // return redirect()->back()->withInput();
        }

        print_r($_POST);

        $nomePaciente = $_POST['nome_paciente'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['data_nascimento'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $telefone = $_POST['telefone'];
        $observacoes = $_POST['observacoes'];

        $db = \config\Database::connect();

        $data = [
            'Nome_Paciente' => $nomePaciente,
            'CPF' => $cpf,
            'Data_Nascimento' => $dataNascimento,
            'Cep' => $cep,
            'Logradouro' => $logradouro,
            'Bairro' => $bairro,
            'Cidade' => $cidade,
            'UF' => $uf,
            'Numero' => $numero,
            'Complemento' => $complemento,
            'Telefone' => $telefone,
            'OBS' => $observacoes,
        ];

        $db->table('pacientes')->insert($data);
        return redirect()->to('/public/PesquisarPacientes');
    }
}
