<?php

namespace App\Controllers;

use App\Models\AgendamentosModel;
use App\Models\PacientesModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class EditarProfissional extends BaseController

{
    protected $helpers = ['form'];
    public function index($id): string
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT Id_Profissional, Nome_Profissional, Formacao, CPF, Data_Nascimento, Sexo, 
        CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone 
        FROM profissional 
        WHERE Id_Profissional = '" . $id . "'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Profissional', 'editarprofissional' => $resultado];
        return view('editarprofissional', $data);
    }


    public function atualizar($id)
    {

        $regras_validacao = [
            'nomeProfissional' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O Nome do Profissional é obrigatório',
                    'min_length' => 'O Nome do Profissional deve ter no mínimo 3 letras',
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
            'dataNascimento' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A Data de Nascimento é obrigatória'
                ]
            ],
            'cidade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A Cidade é obrigatória'
                ]
            ],
            'uf' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'A UF é obrigatória'
                ]
            ],
            //'telefone' => 'required',
            'telefone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'O número de Telefone é obrigatório'
                ]
            ],
        ];


        if (!$this->validate($regras_validacao)) {
            return redirect()->to("/public/EditarProfissional/index/$id")->withInput();
            // return redirect()->back()->withInput();
        }
        //atualização/update do profissional       
        $nomeProfissional = $_POST['nomeProfissional'];
        $formacao = $_POST['formacao'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['dataNascimento'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $telefone = $_POST['telefone'];

        $db = \config\Database::connect();

        $data = [
            'Nome_Profissional' => $nomeProfissional,
            'Formacao' => $formacao,
            'CPF' => $cpf,
            'Data_Nascimento' => $dataNascimento,
            'Sexo' => $sexo,
            'Cep' => $cep,
            'Logradouro' => $logradouro,
            'Bairro' => $bairro,
            'Cidade' => $cidade,
            'UF' => $uf,
            'Numero' => $numero,
            'Complemento' => $complemento,
            'Telefone' => $telefone,
        ];
        try {

            $db->table('profissional')->where('Id_Profissional', $id)->update($data);
            
            $this->session->setFlashdata('sucesso', 'Profissional atualizado com sucesso!');
            return redirect()->to('/public/PesquisarProfissionais');
        } catch (DatabaseException $e) {
            dd($e);
            $this->session->setFlashdata('erro', 'Erro ao atualizar profissional');
            return redirect()->to('/public/PesquisarProfissionais');
        }
    }
    public function excluir($id)
    {
        $db = \config\Database::connect();
        try {
            $db->table('profissional')->where('Id_Profissional', $id)->delete();
            $this->session->setFlashdata('sucesso', 'Registro excluído com sucesso!');
            return redirect()->to('/public/PesquisarProfissionais');
        } catch (DatabaseException $e) {
            if ($e->getCode() == 1451) {
                $this->session->setFlashdata('erro', 'Profissional não pode ser excluído pois existe agendamento registrado');
                return redirect()->to('/public/PesquisarProfissionais');
            }
        }
    }
}
