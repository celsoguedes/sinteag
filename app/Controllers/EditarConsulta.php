<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;
use App\Models\PacientesModel;
class EditarConsulta extends BaseController
{
    protected $helpers = ['form'];
    public function index($id): string
    {   
        $db = \config\Database::connect();
        
        $pacientes = $db->query('select Id_Paciente, Nome_Paciente FROM pacientes')->getResultArray();
        $profissionais = $db->query('select Id_Profissional, Nome_Profissional FROM profissional')->getResultArray();
        $query = $db->query("SELECT a.Id_Agendamento, a.Tipo_Consulta, p.Nome_Paciente, pr.Nome_Profissional, 
        a.agendamento, a.Valor, DATE_FORMAT(a.horario, '%H:%i') as horario, a.Estado, a.Profissional_Id, a.Paciente_Id
        FROM agendamentos as a
        join pacientes p ON a.paciente_id = p.Id_Paciente 
        join profissional pr ON a.Profissional_Id = pr.Id_Profissional
        where Id_Agendamento = '".$id."'");
        $resultado = $query->getRowArray();

        $data = [
            'titulo' => 'Editar Consulta',
            'editarconsulta' => $resultado,
            'pacientes' => $pacientes,
            'profissionais' => $profissionais,
            'erro' => $this->session->getFlashdata('erro')
        ];
        return view('editarconsulta', $data);
    }
    public function atualizar($id)    {    

        
        $regras_validacao = [
            'Id_Paciente' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'Id_Profissional' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'tipoConsulta' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'valor' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'data' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'horario' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
            'estado' => [
                'rules' => 'required',
                'errors' => ['required' => 'O campo é obrigatório']
            ],
        ];
        
        if (!$this->validate($regras_validacao)) {
            return redirect()->to('/public/EditarConsulta/'.$id)->withInput();
        }

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
        
        $verify = $db->table('agendamentos')->select('agendamento, horario')
        ->where('profissional_id', $_POST['Id_Profissional'])
        ->where('agendamento', $_POST['data'])
        ->where('horario', $_POST['horario'])
        ->where('Id_Agendamento !=', $id)
        ->get()->getResult();
        
        if (empty($verify)) {
            $db->table('agendamentos')->where('Id_Agendamento', $id)->update($data);
            $this->session->setFlashdata('sucesso', 'Agendamento atualizado com sucesso!');
            return redirect()->to('/public/PesquisarConsultas');
        } else {
            $this->session->setFlashdata('erro', 'Erro, horário já agendado!');
            return redirect()->to("/public/EditarConsulta/".$id);
        }
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
