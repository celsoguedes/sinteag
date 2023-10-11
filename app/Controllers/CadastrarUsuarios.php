<?php

namespace App\Controllers;

class CadastrarUsuarios extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Usuarios'];
        return view('cadastrarusuarios', $data);              
    }
}