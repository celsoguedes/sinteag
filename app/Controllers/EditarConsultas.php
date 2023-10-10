<?php

namespace App\Controllers;

class EditarConsultas extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Editar Consultas'];
        return view('editarconsultas', $data);              
    }
}