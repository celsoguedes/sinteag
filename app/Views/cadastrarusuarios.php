<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
  <div class="container">
    <h1>Cadastro de Usuario</h1>

    <form action="/sinteag/public/CadastrarUsuarios/cadastrar" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input value="<?= set_value('nome_usuario'); ?>" type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Nome">
          <span class="badge bg-danger"><?= validation_show_error('nome_usuario'); ?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="login">Login:</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="login">
        </div>
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input value="<?= set_value('senha'); ?>" type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
          <span class="badge bg-danger"><?= validation_show_error('senha'); ?></span>
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