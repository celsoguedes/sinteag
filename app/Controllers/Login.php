<?php

namespace App\Controllers;

class Login extends BaseController
{
    //public function index(): string
    public function index()
    {
        if ($this->session->get('logado')) {
            return redirect()->to('/public');
        }
        $data = [
            'titulo' => 'Login',
            'erro' => $this->session->getFlashdata('erro')
        ];
        return view('login', $data);
    }

    public function autenticar() {
        $db = \config\Database::connect();
        $verify = $db->table('usuarios')->select('usuario, senha')
        ->where('usuario', $_POST['usuario'])
        ->where('senha', $_POST['senha'])
        ->get()->getResult();

        if (!empty($verify)) {
            $dataSession = [
                'usuario' => $_POST['usuario'],
                'logado' => true
            ];
            $this->session->set($dataSession);
            $this->session->setFlashdata('sucesso', 'Login efetuado com sucesso!');
            return redirect()->to('/public');
        } else {
            $this->session->setFlashdata('erro', 'Erro, usuário ou senha incorretos!');
            return redirect()->to('/public/Login');
        }
    }

    public function deslogar() {
        $array_items = ['usuario', 'logado'];
        $this->session->remove($array_items);
        return redirect()->to('/public/Login');
    }
}
