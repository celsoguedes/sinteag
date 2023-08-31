<?php

namespace App\Controllers;

class CadastroPaciente extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'SINTEAG'];
        return view('cadastropaciente', $data);              
    }
}