<?php

namespace App\Controllers;

class Home extends BaseController
{
    //public function index(): string
    public function index()
    {
        $db = \config\Database::connect();
        $query = $db->query("SELECT p.Nome_Paciente, p.Telefone, pro.Nome_Profissional,a.horario FROM `agendamentos` a,pacientes p, profissional pro WHERE a.paciente_id = Id_Paciente AND a.profissional_id = pro.Id_Profissional AND agendamento = CONVERT(NOW(),DATE);"
        );
        //sera que vai?
        
        $resultado = $query->getResultArray();


        //$agendamentosModel = new AgendamentosModel();
        //$resultado = $agendamentosModel->select('Id_Agendamento, paciente_id, profissional_id, agendamento,Valor, horario, Estado')->findAll();

        //$data = ['titulo' => 'Pesquisar Consultas', 'pesquisarconsultas' => $resultado];
        //return view('pesquisarconsultas', $data);
        $data = ['titulo' => 'SINTEAG', 'home'=> $resultado];
        return view('paginaprincipal', $data);
    }
}
