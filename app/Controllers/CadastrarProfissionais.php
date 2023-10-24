<?php

namespace App\Controllers;

class CadastrarProfissionais extends BaseController


{
    private $db;

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
            echo "vamos cadastrar o bonitão";
    
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
