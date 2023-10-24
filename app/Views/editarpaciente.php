<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo');
d($this->data);
?>
<div class="p-3 mb-2 bg-info text-dark">
  <div class="container">
    <h1>Editar Paciente</h1>
    <form method="post" action="atualizar/<?php echo $editarpacientes['Id_Paciente']; ?>">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome_paciente" name="nome_paciente" placeholder="Nome" value="<?php echo $editarpacientes['Nome_Paciente']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $editarpacientes['CPF']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dataNascimento">Data de Nascimento:</label>
          <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento" value="<?php echo $editarpacientes['Data_Nascimento']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?php echo $editarpacientes['CEP']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="logradouro">Logradouro:</label>
          <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="<?php echo $editarpacientes['Logradouro']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?php echo $editarpacientes['Bairro']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $editarpacientes['Cidade']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="uf">UF:</label>
          <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="<?php echo $editarpacientes['UF']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="numero">Número:</label>
          <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo $editarpacientes['Numero']; ?>">
        </div>
        <div class="form-group col-md-9">
          <label for="complemento">Complemento:</label>
          <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?php echo $editarpacientes['Complemento']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone">Telefone:</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php echo $editarpacientes['Telefone']; ?>">
        </div>
        <div class="form-group col-md-13">
          <label for="observacoes">Observações:</label>
          <textarea class="form-control" id="observacoes" name="observacoes" placeholder="Observações"></textarea
          value="<?php echo $editarpacientes['OBS']; ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
  </div>
  <tbody>
  
    
  <button type="submit">Salvar</button>

 
</form>

<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
    
</script>

<?php echo $this->endSection(); ?>