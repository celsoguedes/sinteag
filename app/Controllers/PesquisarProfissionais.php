<?php

namespace App\Controllers;

class PesquisarProfissionais extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Pesquisar Profissionais'];
        return view('pesquisarprofissionais', $data);              
    }
}