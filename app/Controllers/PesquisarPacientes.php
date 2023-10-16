<?php

namespace App\Controllers;

class PesquisarPacientes extends BaseController
{
    //public function index(): string
    public function index()
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT Nome_Paciente, CPF, Telefone FROM pacientes");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Pesquisar Pacientes','pesquisarpacientes'=> $resultado];
        return view('pesquisarpacientes', $data);              
    }
}