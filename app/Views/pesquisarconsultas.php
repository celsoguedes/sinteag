<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<h1>Pesquisar Consultas</h1>

<div class="p-3 mb-2 bg-info text-dark">

  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table" id="tabelaConsulta">
        <thead>
          <tr>
            <th>Paciente</th>
            <th>Profissional</th>
            <th>Local</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Valor</th>
            <th>Status</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarconsultas as $consulta) : ?>
            <tr>
              <td id="nome-<?= $consulta['Id_Agendamento']; ?>"><?= $consulta['Nome_Paciente'];?></td>
              <td><?php echo $consulta['Nome_Profissional']; ?></td>
              <td><?php echo $consulta['Tipo_Consulta']; ?></td>
              <td><?php echo date_format(date_create($consulta['agendamento']), 'd/m/Y'); ?></td>
              <td><?php echo date_format(date_create($consulta['horario']), 'H:i'); ?></td>
              <td><?php echo 'R$ ' . number_format($consulta['Valor'], 2, ',', '.'); ?></td>
              <td <?php if ($consulta['Estado'] == 'realizada') echo "style='color:green'";
                  else echo "style='color:red'" ?>><?php echo $consulta['Estado']; ?></td>
              <td style="white-space: nowrap;">
                <a class="btn btn-primary" href="/sinteag/public/EditarConsulta/
                <?php echo $consulta['Id_Agendamento'];
                ?>"><i class="bi bi-pencil-square"></i></a>
                <button id="btnExcluir" onclick="confirmaExclusao(
                  <?= $consulta['Id_Agendamento'];
                  ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <span hidden id="sucesso"><?= empty($this->data['sucesso']) ? null : $this->data['sucesso']; ?></span>
      <span hidden id="erro"><?= empty($this->data['erro']) ? null : $this->data['erro']; ?></span>
    </div>
  </div>


  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const sucesso = document.querySelector('#sucesso').innerText
      const erro = document.querySelector('#erro').innerText
      if (sucesso) {
        Swal.fire(sucesso, '', 'success')
      }
      if (erro) {
        Swal.fire({
          icon: 'error',
          title: 'Desculpe',
          text: erro,
        })
      }
    })

    new DataTable('#tabelaConsulta', {
      language: {
        url: '/sinteag/public/pt-BR.json'
      }
    });

    function confirmaExclusao(id) {
      const nome = document.querySelector(`#nome-${id}`).textContent
      Swal.fire({
        title: `Deseja realmente excluir o agendamento de ${nome}?`,
        showDenyButton: true,
        confirmButtonText: 'Excluir',
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          window.open(`/sinteag/public/EditarConsulta/excluir/${id}`, "_self")
          Swal.fire('Registro excluído com sucesso!', '', 'success')
        }
      })
    }
  </script>

  <?php echo $this->endSection(); ?>