<?php

namespace App\Controllers;

class CadastrarProfissionais extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Profissionais'];
        return view('cadastrarprofissionais', $data);              
    }
}