<?php

namespace App\Controllers;

class CadastroPaciente extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Paciente'];
        return view('cadastropaciente', $data);              
    }
}