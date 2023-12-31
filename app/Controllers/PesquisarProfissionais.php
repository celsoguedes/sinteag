<?php

namespace App\Controllers;

use App\Models\ProfissionaisModel;

class PesquisarProfissionais extends BaseController
{
    //public function index(): string
    public function index()
    {
        //$db = \config\Database::connect();

        //$query = $db->query("SELECT Nome_Profissional, CPF, Telefone, Sexo FROM profissional");
        //$resultado = $query->getResult();
        $profissionalModel = new ProfissionaisModel();
        $resultado = $profissionalModel->select('Id_Profissional, Nome_Profissional, CPF, Telefone,Sexo')->findAll();

        //$data = ['titulo' => 'Pesquisar Profissionais', 
        //'pesquisarprofissionais' => $resultado];
        //return view('pesquisarprofissionais', $data);

        $data = [
            'titulo' => 'Pesquisar Profissionais',
            'pesquisarprofissionais' => $resultado,
            'sucesso' => $this->session->getFlashdata('sucesso'),
            'erro' => $this->session->getFlashdata('erro')
        ];
        return view('pesquisarprofissionais', $data);
    }
}
