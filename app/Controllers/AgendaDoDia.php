<?php

namespace App\Controllers;

class AgendaDoDia extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'Agenda do Dia'];
        return view('agendadodia', $data);              
    }
}