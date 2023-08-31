<?php

namespace App\Controllers;

class CadastroProfissional extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'SINTEAG'];
        return view('cadastroprofissional', $data);              
    }
}