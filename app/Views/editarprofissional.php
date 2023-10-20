<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<div class="p-3 mb-2 bg-info text-dark">
<div class="container">
<h1>Editar Profissionaal</h1>
    <form action="./atualizar/<?php echo $editarprofissional['Id_Profissional']; ?>">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome"
          value="<?php echo $editarprofissional['Nome_Profissional']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="Formacao">Formação:</label>
          <input type="text" class="form-control" id="Formacao" placeholder="Formação"
          value="<?php echo $editarprofissional['Formacao']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" placeholder="CPF"
          value="<?php echo $editarprofissional['CPF']; ?>">
        </div>        
        </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dataNascimento">Data de Nascimento:</label>
          <input type="text" class="form-control" id="dataNascimento" placeholder="Data de Nascimento"
          value="<?php echo $editarprofissional['Data_Nascimento']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" id="cep" placeholder="CEP"
          value="<?php echo $editarprofissional['CEP']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="logradouro">Logradouro:</label>
          <input type="text" class="form-control" id="logradouro" placeholder="Logradouro"
          value="<?php echo $editarprofissional['Logradouro']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" placeholder="Bairro"
          value="<?php echo $editarprofissional['Bairro']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="cidade" placeholder="Cidade"
          value="<?php echo $editarprofissional['Cidade']; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="uf">UF:</label>
          <input type="text" class="form-control" id="uf" placeholder="UF"
          value="<?php echo $editarprofissional['UF']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="numero">Número:</label>
          <input type="text" class="form-control" id="numero" placeholder="Número"
          value="<?php echo $editarprofissional['Numero']; ?>">
        </div>
        <div class="form-group col-md-9">
          <label for="complemento">Complemento:</label>
          <input type="text" class="form-control" id="complemento" placeholder="Complemento"
          value="<?php echo $editarprofissional['Complemento']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone">Telefone:</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone"
          value="<?php echo $editarprofissional['Telefone']; ?>">
        </div>
        
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
  </div>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>