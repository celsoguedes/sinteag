<?php

namespace App\Controllers;

class EditarProfissional extends BaseController

{
    
    public function index($id): string
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT Id_Profissional, Nome_Profissional, Formacao, CPF, Data_Nascimento, Sexo, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone FROM profissional WHERE Id_Profissional = '" . $id . "'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Profissional','editarprofissional'=> $resultado];
        return view('editarprofissional', $data);
    }
}