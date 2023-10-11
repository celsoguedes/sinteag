<?php

namespace App\Controllers;

class EditarConsulta extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Editar Consulta'];
        return view('editarconsulta', $data);              
    }
}