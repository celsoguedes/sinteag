<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<h1>Pesquisar Consultas</h1>

<div class="p-3 mb-2 bg-info text-dark">

  <div class="row mt-3">
    <div class="col-md-9">
      <table class="table" id="tabelaConsulta">
        <thead>
          <tr>
            <th>Paciente</th>
            <th>Profissional</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Hora</th>
            <th>Status</th>
            <th></th>
            <th></th>
          </tr>


          <?php foreach ($pesquisarconsultas as $key => $consulta) : ?>
            <tr>
              <td><?php echo $consulta['Nome_Paciente']; ?></td>
              <td><?php echo $consulta['Nome_Profissional']; ?></td>
              <td><?php echo $consulta['agendamento']; ?></td>
              <td><?php echo $consulta['Valor']; ?></td>
              <td><?php echo $consulta['horario']; ?></td>
              <td><?php echo $consulta['Estado']; ?></td>
              <td><a class="btn btn-primary" href="/sinteag/public/EditarConsulta/<?php echo $consulta['Id_Agendamento']; ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a class="btn btn-danger" href="/sinteag/public/EditarConsulta/excluir/<?= $consulta['Id_Agendamento']; ?>"><i class="bi bi-trash"></i></a></td>


            <?php endforeach; ?>
            </tr>
            </tbody>
      </table>
    </div>
  </div>


  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    new DataTable('#tabelaConsulta');
  </script>

  <?php echo $this->endSection(); ?>