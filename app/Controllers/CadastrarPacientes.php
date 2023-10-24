<?php

namespace App\Controllers;

use App\Models\PacientesModel;

class CadastrarPacientes extends BaseController
{
    private $db;

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
