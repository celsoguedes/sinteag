<?php

namespace App\Controllers;

class PesquisarPacientes extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Pesquisar Pacientes'];
        return view('pesquisarpacientes', $data);              
    }
}