<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<h1>Pesquisar Pacientes</h1>

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
          <th>Paciente</th>
          <th>CPF</th>
          <th>Telefone</th>
        </tr>

      <tbody>
        <?php foreach ($pesquisarpacientes as $paciente): ?>
          <tr>
            <td><?php echo $paciente->Nome_Paciente;?></td>
            <td><?php echo $paciente->CPF;?></td>
            <td><?php echo $paciente->Telefone;?></td>
        <?php endforeach; ?>
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