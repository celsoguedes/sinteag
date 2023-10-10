<?php

namespace App\Controllers;

class PesquisarConsultas extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Pesquisar Consultas'];
        return view('pesquisarconsultas', $data);              
    }
}