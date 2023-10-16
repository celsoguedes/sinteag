<?php

namespace App\Controllers;

class PesquisarProfissionais extends BaseController
{
    //public function index(): string
    public function index()
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT Nome_Profissional, CPF, Telefone, Sexo FROM profissional");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Pesquisar Profissionais','pesquisarprofissionais'=> $resultado];
        return view('pesquisarprofissionais', $data);              
    }
}