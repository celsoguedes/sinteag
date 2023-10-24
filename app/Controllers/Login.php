<?php

namespace App\Controllers;

class Login extends BaseController
{
    //public function index(): string
    public function index()
    {
        $data = ['titulo' => 'Login'];
        return view('login', $data);
    }
}
