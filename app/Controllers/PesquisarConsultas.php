<?php

namespace App\Controllers;

class PesquisarConsultas extends BaseController
{
    //public function index(): string
    public function index()
    {

        $db = \config\Database::connect();

        $query = $db->query("SELECT paciente_id, profissional_id, agendamento,Valor, horario, Status FROM agendamentos");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Pesquisar Consultas','pesquisarconsultas'=>$resultado];
        return view('pesquisarconsultas', $data);              
    }
}