<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;
use App\Models\PacientesModel;
class EditarConsulta extends BaseController
{
    //public function index(): string
    public function index($id): string
    {   
        $db = \config\Database::connect();
        
        $pacientes = $db->query('select Id_Paciente, Nome_Paciente FROM pacientes')->getResultArray();
        $profissionais = $db->query('select Id_Profissional, Nome_Profissional FROM profissional')->getResultArray();
        $query = $db->query("SELECT a.Id_Agendamento , p.Nome_Paciente, pr.Nome_Profissional, 
        a.agendamento, a.Valor, a.horario, a.Estado, a.Profissional_Id, a.Paciente_Id
        FROM agendamentos as a
        join pacientes p ON a.paciente_id = p.Id_Paciente 
        join profissional pr ON a.Profissional_Id = pr.Id_Profissional
        where Id_Agendamento = '".$id."'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Consulta', 'editarconsulta' => $resultado,
        'pacientes' => $pacientes,
        'profissionais' => $profissionais];
        return view('editarconsulta', $data);
    }
    public function atualizar($id)    {    
        $db = \config\Database::connect();

        $paciente = $_POST['Id_Paciente'];
        $profissional = $_POST['Id_Profissional'];
        $TipoConsulta = $_POST['tipoConsulta'];
        $valor = $_POST['valor'];
        $data = $_POST['data'];
        $hora = $_POST['horario'];
        $estado = $_POST['estado'];

        $data = [
            'paciente_id' => $paciente,
            'profissional_id ' => $profissional,
            'Tipo_Consulta' => $TipoConsulta,
            'Valor' => $valor,
            'agendamento' => $data,
            'horario' => $hora,
            'Estado' => $estado,
        ];
        
        $db->table('agendamentos')->where('Id_Agendamento', $id)->update($data);
        return redirect()->to('/public/PesquisarConsultas');
    }

    public function excluir($id)
    {

        // dd('teste');
        $db = \config\Database::connect();

        $db->table('agendamentos')->where('Id_Agendamento', $id)->delete(); //qualquer coisa grita que eu volto.b3z

        //$query = $this->db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
        //$resultado = $query->getRowArray();

        return redirect()->to('/public/PesquisarConsultas');
    }   
}
