<?php

namespace App\Controllers;

class CadastroUsuarios extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Cadastro de Usuarios'];
        return view('cadastrousuarios', $data);              
    }
}