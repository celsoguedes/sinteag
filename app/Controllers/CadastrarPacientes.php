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
                    'required' => 'O Nome do Paciente é obrigatório',
                    'min_length' => 'O Nome do Paciente deve ter no mínimo 3 letras',
                ]
            ],
            'cpf' => [
                'rules' => 'required|min_length[11]',
                'errors' => [
                    'required' => 'O numero do CPF é obrigatório',
                    'min_length' => 'O numero do CPF deve ter no mínimo 11 números',
                ]
            ],
            //'cpf' => 'required|is_unique[pacientes.CPF]',
            //'data_nascimento' => 'required',
            'data_nascimento' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A Data de Nascimento é obrigatória'
                ]
            ],
            //'cidade' => 'required',
            'cidade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A Cidade é obrigatória'
                ]
            ],
            //'uf' => 'required',
            'uf' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A UF é obrigatória'
                ]
            ],
            //'telefone' => 'required',
            'telefone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O número de Telefone é obrigatório'
                ]
            ],
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
        $this->session->setFlashdata('sucesso', 'Paciente cadastrado com sucesso!');
        return redirect()->to('/public/PesquisarPacientes');
    }
}
