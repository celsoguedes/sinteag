<?php

namespace App\Controllers;

class CadastrarConsultas extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Consultas'];
        return view('cadastrarconsultas', $data);              
    }
}