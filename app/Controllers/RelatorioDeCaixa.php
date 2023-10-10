<?php

namespace App\Controllers;

class RelatorioDeCaixa extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Relatorio de Caixa'];
        return view('relatoriodecaixa', $data);              
    }
}