<?php

namespace App\Controllers;

class PaginaPrincipal extends BaseController
{
    public function index()
    {
        $dados = ['titulo' => 'Página Principal'];
        return view('paginaprincipal', $dados);
    }

}