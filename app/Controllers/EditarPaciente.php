<?php

namespace App\Controllers;

class EditarPaciente extends BaseController

{
    public function index(): string
    {
        $data = ['titulo' => 'Editar Paciente'];
        return view('editarpaciente', $data);
    }
}