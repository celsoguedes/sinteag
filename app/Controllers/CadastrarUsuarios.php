<?php

namespace App\Controllers;

class CadastrarUsuarios extends BaseController
{
    private $db;

    protected $helpers = ['form'];

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
        $regras_validacao = [
            'nome_usuario' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O Nome do Usuário é obrigatório',
                    'min_length' => 'O Nome do Paciente deve ter no mínimo 3 letras',
                ]
            ],
            'login' => [
                'rules' => 'required|min_length[11]',
                'errors' => [
                    'required' => 'O Login é obrigatório',
             
                ]
            ],
            //'cpf' => 'required|is_unique[pacientes.CPF]',
            //'data_nascimento' => 'required',
            'senha' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A Senha é obrigatória'
                ]
            ],
           
        ];

        if (!$this->validate($regras_validacao)) {
            return redirect()->to('/public/CadastrarUsuarios')->withInput();
            // return redirect()->back()->withInput();
        }

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
