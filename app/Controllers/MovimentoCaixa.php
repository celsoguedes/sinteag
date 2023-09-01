<?php

namespace App\Controllers;

class MovimentoCaixa extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Movimento de Caixa'];
        return view('movimentocaixa', $data);              
    }
}