<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<h1>Pesquisar Profissionais</h1>

<div class="p-3 mb-2 bg-info text-dark">

<div class="row mt-3">
    <div class="form-group col-md-3">
          <label for="nome">Filtro:</label>
          <input type="text" class="form-control" id="Filtro" placeholder="Filtro">
    </div>
    <div class="col-md-9">
    <table class="table">
      <thead>
        <tr>
          <th>Profissional</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>Endereço</th>
          <th>Sexo</th>
        </tr>

      </tbody>
    </table>
    
  </div>
</div>

      <button type="submit" class="btn btn-primary">Editar</button>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>