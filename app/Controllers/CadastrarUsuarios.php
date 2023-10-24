<?php

namespace App\Controllers;

class CadastrarUsuarios extends BaseController
{
    private $db;

    function __construct()
    {
        $this->db = \config\Database::connect();
    }
    //public function index(): string
    public function index()
    {
        $data = ['titulo' => 'Cadastro de Usuarios'];
        return view('cadastrarusuarios', $data);
    }

    public function cadastrar()
    {


        print_r($_POST);

        $usuario = $_POST['nome_usuario'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];


        $db = \config\Database::connect();

        $data = [
            'Usuario' => $usuario,
            'login' => $login,
            'senha' => $senha,

        ];

        $db->table('usuarios')->insert($data); //qualquer coisa grita que eu volto.b3z
        return redirect()->to('/public/Home');
    }
}
