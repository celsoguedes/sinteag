<?php

namespace App\Controllers;

use App\Models\PacientesModel;
class PesquisarPacientes extends BaseController
{
    //public function index(): string
    public function index()
    {
        $db = \config\Database::connect();

        //$query = $db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Telefone FROM pacientes");
        //$resultado = $query->getResult();
        $pacientesModel = new PacientesModel();
        $resultado = $pacientesModel->select('Id_Paciente, Nome_Paciente, CPF, Telefone')->findAll();
        //esse camarada de cima retorna um array, e estavamos tentando pegar como objeto
        //$resultado é um vetor, aí temos que ler como chave=>valor .. lá no foreach
        //Aí tu ja usa esse modelo pra todas as consultas que tá feito.


        $data = ['titulo' => 'Pesquisar Pacientes','pesquisarpacientes' => $resultado];
        return view('pesquisarpacientes', $data);              
    }
} 