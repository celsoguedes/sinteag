<?php

namespace App\Controllers;

class EditarPaciente extends BaseController

{
    public function index($id): string    
    {
        
        $db = \config\Database::connect();

        $query = $db->query("SELECT Id_Paciente, Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
        $resultado = $query->getRowArray();

        $data = ['titulo' => 'Editar Paciente','editarpacientes'=> $resultado];
        return view('editarpaciente', $data);
    }

    public function atualizar($id)
    {
        //atualização/update do paciente
        $db = \config\Database::connect();
        $db->query("UPDATE Nome_Paciente, CPF, Data_Nascimento, CEP, Logradouro, Bairro, Cidade, UF, Numero, Complemento, Telefone, OBS FROM pacientes WHERE Id_Paciente = '" . $id . "'");
    }
}
