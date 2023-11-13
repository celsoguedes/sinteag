<?php

namespace App\Controllers;
use App\Models\AgendamentosModel;
use App\Models\PacientesModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Exception;

class EditarPaciente extends BaseController

{

    private $db;
    protected $helpers = ['form'];

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
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O Nome do Paciente é obrigatório',
                    'min_length' => 'O Nome do Paciente deve ter no mínimo 3 letras',
                ]
            ],
            'cpf' => [
                'rules' => 'required|max_length[11]|min_length[11]',
                'errors' => [
                    'required' => 'O campo é obrigatório',
                    'max_length' => 'Digite apenas 11 caracteres',
                    'min_length' => 'Digite 11 caracteres',
                ]
            ],
            'data_nascimento' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo é obrigatório',
                ]
            ],
            'cidade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo é obrigatório',
                ]
            ],
            'uf' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo é obrigatório',
                ]
            ],
            'telefone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo é obrigatório',
                ]
            ],
        ];

        if (!$this->validate($regras_validacao)) {
            return redirect()->to("/public/EditarPaciente/index/$id")->withInput();
        }

        $db = \config\Database::connect();

        $data = [
            'Nome_Paciente' => $_POST['nome_paciente'],
            'CPF' => $_POST['cpf'],
            'Data_Nascimento' => $_POST['data_nascimento'],
            'Cep' => $_POST['cep'],
            'Logradouro' => $_POST['logradouro'],
            'Bairro' => $_POST['bairro'],
            'Cidade' => $_POST['cidade'],
            'UF' => $_POST['uf'],
            'Numero' => $_POST['numero'],
            'Complemento' => $_POST['complemento'],
            'Telefone' => $_POST['telefone'],
            'OBS' => $_POST['observacoes'],
        ];

        try {

            $db->table('pacientes')->where('Id_Paciente', $id)->update($data);
            
            $this->session->setFlashdata('sucesso', 'Paciente atualizado com sucesso!');
            return redirect()->to('/public/PesquisarPacientes');
        } catch (DatabaseException $e) {
            dd($e);
            $this->session->setFlashdata('erro', 'Erro ao atualizar paciente');
            return redirect()->to('/public/PesquisarPacientes');
        }
        
    }   

    public function excluir($id)
    {
        $db = \config\Database::connect();

        try {
            $db->table('pacientes')->where('Id_Paciente', $id)->delete(); //qualquer coisa grita que eu volto.b3z
            $this->session->setFlashdata('sucesso', 'Registro excluído com sucesso!');
            return redirect()->to('/public/PesquisarPacientes');
        } catch(DatabaseException $e) {
            if ($e->getCode() == 1451) {
                $this->session->setFlashdata('erro', 'Paciente não pode ser excluído pois existe agendamento registrado');
                return redirect()->to('/public/PesquisarPacientes');
            }
        }
        

        //$query = $this->db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
        //$resultado = $query->getRowArray();

        
    }   
}

