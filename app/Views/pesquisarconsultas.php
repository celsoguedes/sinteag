<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<h1>Pesquisar Consultas</h1>

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
          <th>Profissional</th>
          <th>Data</th>
          <th>Valor</th>
          <th>Hora</th>
          <th>Status</th>
        </tr>
      
      
        <?php foreach ($pesquisarconsultas as $consulta): ?>
          <tr>
            <td><?php echo $consulta->paciente_id;?></td>
            <td><?php echo $consulta->profissional_id;?></td>
            <td><?php echo $consulta->agendamento;?></td>
            <td><?php echo $consulta->Valor;?></td>
            <td><?php echo $consulta->horario;?></td>
            <td><?php echo $consulta->Status;?></td>

    

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