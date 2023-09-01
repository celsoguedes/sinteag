<?php

namespace App\Controllers;

class CadastroConsulta extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Consultas'];
        return view('cadastroconsulta', $data);              
    }
}