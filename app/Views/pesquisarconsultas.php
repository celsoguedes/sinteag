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
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarconsultas as $consulta) : ?>
            <tr>
              <td id="nome-<?= $consulta['Id_Agendamento']; ?>"><?= $consulta['Nome_Paciente']; ?></td>
              <td><?php echo $consulta['Nome_Profissional']; ?></td>
              <td><?php echo $consulta['agendamento']; ?></td>
              <td><?php echo $consulta['Valor']; ?></td>
              <td><?php echo $consulta['horario']; ?></td>
              <td><?php echo $consulta['Estado']; ?></td>
              <td style="white-space: nowrap;">
                <a class="btn btn-primary" href="/sinteag/public/EditarConsulta/<?php echo $consulta['Id_Agendamento']; ?>"><i class="bi bi-pencil-square"></i></a>
                <button id="btnExcluir" onclick="confirmaExclusao(<?= $consulta['Id_Agendamento']; ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    new DataTable('#tabelaConsulta');

    function confirmaExclusao(id) {
      const nome = document.querySelector(`#nome-${id}`).textContent
      Swal.fire({
        title: `Deseja realmente excluir o agendamento de ${nome}?`,
        showDenyButton: true,
        confirmButtonText: 'Excluir',
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          window.open(`/sinteag/public/EditarConsulta/excluir/${id}`,"_self")
          Swal.fire('Registro excluído com sucesso!', '', 'success')
        }
      })
    }
    
  </script>

  <?php echo $this->endSection(); ?>