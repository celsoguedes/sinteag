<?php

namespace App\Controllers;

use App\Models\PacientesModel;

class CadastrarPacientes extends BaseController
{
    //public function index(): string
    public function index()
    {

        $PacientesModel = new PacientesModel();
        $data = ['titulo' => 'Cadastro de Paciente'];
        return view('cadastrarpacientes', $data);              
    }
}