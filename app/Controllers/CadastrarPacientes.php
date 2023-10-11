<?php

namespace App\Controllers;

class CadastrarPacientes extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Paciente'];
        return view('cadastrarpacientes', $data);              
    }
}