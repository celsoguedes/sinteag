<?php

namespace App\Controllers;

class Home extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'SINTEAG'];
        return view('paginaprincipal', $data);
        //return view('modelos/header',$data)
        //.view('paginaprincipal', $data)
        //.view('modelos/footer', ['copy' =>'2023 - CG Desenvolvimento de Sistemas - MEI']);
        
    }
}
