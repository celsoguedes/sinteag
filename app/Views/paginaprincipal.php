<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>

<h2>Sistema Integrado de Agendamentos</h2>

<div class="p-3 mb-2 bg-info text-dark">
  <h1>Agenda do Dia</h1>
  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table" id="agenda">
        <thead>
          <tr>
            <th>Paciente</th>
            <th>Hora</th>
            <th>Profissional</th>
            <th>Telefone</th>
          </tr>

          <?php foreach ($home as $key => $home) : ?>
            <tr>
              <td><?php echo $home['Nome_Paciente']; ?></td>
              <<td><?php echo date('H:i', strtotime($home['horario'])); ?></td>
              <td><?php echo $home['Nome_Profissional']; ?></td>
              <td><?php echo $home['Telefone']; ?></td>
            <?php endforeach; ?>

            </tbody>
      </table>
    </div>
  </div>

  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    new DataTable('#agenda');
  </script>

  <?php echo $this->endSection(); ?>