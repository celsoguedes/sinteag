<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
  <div class="container">
    <h1>Cadastro de Profissional</h1>

    <form action="/sinteag/public/CadastrarProfissionais/cadastrar" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input value="<?= set_value('nome_profissional'); ?>" type="text" class="form-control" id="nome" name="nome_profissional" placeholder="Nome">
          <span class="badge bg-danger"><?= validation_show_error('nome_profissional'); ?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">CPF:</label>
          <input value="<?= set_value('cpf'); ?>" type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
          <span class="badge bg-danger"><?= validation_show_error('cpf'); ?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">Especialidade:</label>
          <input type="text" class="form-control" id="formacao" name="formacao" placeholder="Formação">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dataNascimento">Data de Nascimento:</label>
          <input value="<?= set_value('datanascimento'); ?>" type="date" class="form-control" id="datanascimento" name="datanascimento" placeholder="Data de Nascimento">
          <span class="badge bg-danger"><?= validation_show_error('datanascimento'); ?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="sexo">Sexo:</label>
          <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
        </div>
        <div class="form-group col-md-4">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
        </div>
        <div class="form-group col-md-4">
          <label for="logradouro">Logradouro:</label>
          <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
        </div>
        <div class="form-group col-md-4">
          <label for="cidade">Cidade:</label>
          <input value="<?= set_value('cidade'); ?>" type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
          <span class="badge bg-danger"><?= validation_show_error('cidade'); ?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="uf">UF:</label>
          <input value="<?= set_value('uf'); ?>" type="text" class="form-control" id="uf" name="uf" placeholder="UF">
          <span class="badge bg-danger"><?= validation_show_error('uf'); ?></span>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="numero">Número:</label>
          <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
        </div>
        <div class="form-group col-md-9">
          <label for="complemento">Complemento:</label>
          <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone">Telefone:</label>
          <input value="<?= set_value('telefone'); ?>" type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
          <span class="badge bg-danger"><?= validation_show_error('telefone'); ?></span>
        </div>

      </div>
      <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
</div>

<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>

</script>

<?php echo $this->endSection(); ?>