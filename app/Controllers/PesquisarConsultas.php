<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;

class PesquisarConsultas extends BaseController
{

    public function index()
    {
        $db = \config\Database::connect();
        $query = $db->query("
        SELECT a.Id_Agendamento, a.Tipo_Consulta , p.Nome_Paciente, 
        pr.Nome_Profissional, a.agendamento, a.Valor, a.horario, a.Estado
        FROM agendamentos as a
        join pacientes p ON a.paciente_id = p.Id_Paciente 
        join profissional pr ON a.Profissional_Id = pr.Id_Profissional");
        $resultado = $query->getResultArray();

        $data = [
            'titulo' => 'Pesquisar Consultas',
            'pesquisarconsultas' => $resultado,
            'sucesso' => $this->session->getFlashdata('sucesso'),
            'erro' => $this->session->getFlashdata('erro')
        ];

        return view('pesquisarconsultas', $data);
    }
}
