<?php

namespace App\Controllers;

class EditarConsulta extends BaseController
{
    //public function index(): string
    public function index($id)
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT a.Id_Agendamento , p.Nome_Paciente, pr.Nome_Profissional, 
        a.agendamento, a.Valor, a.horario, a.Estado
        FROM agendamentos as a
        join pacientes p ON a.paciente_id = p.Id_Paciente 
        join profissional pr ON a.Profissional_Id = pr.Id_Profissional");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Consulta', 'editarconsulta' => $resultado];
        return view('editarconsulta', $data);
    }
    public function atualizar($id)
    {
        //atualização/update da consulta
        $nomePaciente = $_POST['nomepaciente'];
        $nomeProfissional = $_POST['nomeprofissional'];
        $tipoConsulta = $_POST['tipoConsulta '];
        $valor = $_POST['valor'];
        $agendamento = $_POST['agendamento'];
        $horario = $_POST['horario'];
        $estado = $_POST['estado'];

        

        $db = \config\Database::connect();

        $data = [
            'Nome_Paciente' => $nomePaciente,
            'Nome_Profissional' => $nomeProfissional,
            'Tipo_Consulta' => $tipoConsulta,
            'Valor' => $valor,
            'Agendamento'=> $agendamento,
            'Horario' => $horario,
            'estado' => $estado,

        ];
    
        $db->table('pacientes')->where('Id_Agendamento', $id)->update($data);
    }
}
