<?php

namespace App\Controllers;
use App\Models\AgendamentosModel;
use App\Models\PacientesModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class EditarPaciente extends BaseController

{

    private $db;
    // protected $session;

    function __construct()
    {
        $this->db = \config\Database::connect();
    }

    public function index($id): string
    {
        $query = $this->db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS 
        FROM pacientes 
        WHERE Id_Paciente = '" . $id . "'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Paciente', 'editarpacientes' => $resultado];
        // dd($data, $id);
        return view('editarpaciente', $data);
    }

    public function atualizar($id)
    {
        $regras_validacao = [
            'nome_paciente' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O nome do paciente é obrigatório',
                ]
            ],
            'cpf' => 'required|is_unique[pacientes.CPF]',
            'data_nascimento' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'telefone' => 'required',
        ];

        if (!$this->validate($regras_validacao)) {
            return redirect()->to('/public/EditarPacientes')->withInput();
            // return redirect()->back()->withInput();
        }

        //atualização/update do paciente        
        $nomePaciente = $_POST['nome_paciente'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['data_nascimento'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $telefone = $_POST['telefone'];
        $observacoes = $_POST['observacoes'];

        $db = \config\Database::connect();

        $data = [
            'Nome_Paciente' => $nomePaciente,
            'CPF' => $cpf,
            'Data_Nascimento' => $dataNascimento,
            'Cep' => $cep,
            'Logradouro' => $logradouro,
            'Bairro' => $bairro,
            'Cidade' => $cidade,
            'UF' => $uf,
            'Numero' => $numero,
            'Complemento' => $complemento,
            'Telefone' => $telefone,
            'OBS' => $observacoes,
        ];

        $db->table('pacientes')->where('Id_Paciente', $id)->update($data); //qualquer coisa grita que eu volto.b3z

        //$query = $this->db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
        //$resultado = $query->getRowArray();

        return redirect()->to('/public/PesquisarPacientes');
    }   

    public function excluir($id)
    {
        $db = \config\Database::connect();

        try {
            $db->table('pacientes')->where('Id_Paciente', $id)->delete(); //qualquer coisa grita que eu volto.b3z
            return redirect()->to('/public/PesquisarPacientes');
        } catch(DatabaseException $e) {
            if ($e->getCode() == 1451) {
                $this->session->setFlashdata('message', 'Paciente não pode ser excluído pois existe agendamento registrado');
                return redirect()->to('/public/PesquisarPacientes');
            }
        }
        

        //$query = $this->db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
        //$resultado = $query->getRowArray();

        
    }   
}

