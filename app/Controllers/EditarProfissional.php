<?php

namespace App\Controllers;

class EditarProfissional extends BaseController

{
    public function index(): string
    {
        $data = ['titulo' => 'Editar Profissional'];
        return view('editarprofissional', $data);
    }
}