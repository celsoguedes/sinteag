<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
  <div class="container">
    <h1>Cadastro de Usuario</h1>
    <form action="/sinteag/public/CadastrarUsuarios/cadastrar" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome_usuario" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
          <label for="login">Login:</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="login">
        </div>
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>

      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
</div>

<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>

</script>

<?php echo $this->endSection(); ?>