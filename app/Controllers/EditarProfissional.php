<?php

namespace App\Controllers;

class EditarProfissional extends BaseController

{

    public function index($id): string
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT Id_Profissional, Nome_Profissional, Formacao, CPF, Data_Nascimento, Sexo, 
        CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone 
        FROM profissional 
        WHERE Id_Profissional = '" . $id . "'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Profissional', 'editarprofissional' => $resultado];
        return view('editarprofissional', $data);
    }


    public function atualizar($id)
    {
        //atualização/update do profissional       
        $nomeProfissional = $_POST['nomeProfissional'];
        $formacao = $_POST['formacao'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['dataNascimento'];
        $sexo = $_POST['sexo'];
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
            'Nome_Profissional' => $nomeProfissional,
            'Formacao' => $formacao,
            'CPF' => $cpf,
            'Data_Nascimento' => $dataNascimento,
            'Sexo' => $sexo,
            'Cep' => $cep,
            'Logradouro' => $logradouro,
            'Bairro' => $bairro,
            'Cidade' => $cidade,
            'UF' => $uf,
            'Numero' => $numero,
            'Complemento' => $complemento,
            'Telefone' => $telefone,
        ];
        $db->table('profissional')->where('Id_Profissional', $id)->update($data);
    }
}
