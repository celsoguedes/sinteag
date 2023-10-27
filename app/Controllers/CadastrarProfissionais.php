<?php

namespace App\Controllers;

class CadastrarProfissionais extends BaseController


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


        $data = ['titulo' => 'Cadastro de Profissionais'];
        return view('cadastrarprofissionais', $data);
    }

    public function cadastrar()
    {
        $regras_validacao = [
            'nome_profissional' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O Nome do Profissional é obrigatório',
                    'min_length' => 'O Nome do Profissional deve ter no mínimo 3 letras',
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
            'datanascimento' => [
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
            return redirect()->to('/public/CadastrarProfissionais')->withInput();
            // return redirect()->back()->withInput();
        }


        //print_r($_POST);

        $nomeprofissional = $_POST['nome_profissional'];
        $formacao = $_POST['formacao'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['datanascimento'];
        $Sexo = $_POST['sexo'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $telefone = $_POST['telefone'];

        $db = \config\Database::connect();

        $data = [
            'Nome_Profissional' => $nomeprofissional,
            'Formacao' => $formacao,
            'CPF' => $cpf,
            'Data_Nascimento' => $dataNascimento,
            'Sexo' => $Sexo,
            'Cep' => $cep,
            'Logradouro' => $logradouro,
            'Bairro' => $bairro,
            'Cidade' => $cidade,
            'UF' => $uf,
            'Numero' => $numero,
            'Complemento' => $complemento,
            'Telefone' => $telefone,

        ];

        $db->table('profissional')->insert($data); //qualquer coisa grita que eu volto.b3z
        return redirect()->to('/public/PesquisarProfissionais');
    }
}
