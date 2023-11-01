<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>

<h1>Pesquisar Pacientes</h1>

<div class="p-3 mb-2 bg-info text-dark">

  <div class="row mt-3">
    <div class="col-md-9">
      <table class="table" id="tabelaCelso">
        <thead>
          <tr>
            <th>Paciente</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarpacientes as $k => $paciente) : ?>
            <tr>
              <td id="nome-<?= $paciente['Id_Paciente']; ?>"><?= $paciente['Nome_Paciente']; ?></td>
              <td><?php echo $paciente['CPF']; ?></td>
              <td><?php echo $paciente['Telefone']; ?></td>
              <td style="white-space: nowrap;">
                <a class="btn btn-primary" href="/sinteag/public/EditarPaciente/index/<?php echo $paciente['Id_Paciente']; ?>"><i class="bi bi-pencil-square"></i></a>
                <button id="btnExcluir" onclick="confirmaExclusao(<?= $paciente['Id_Paciente']; ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <span hidden id="sucesso"><?= empty($this->data['sucesso'])? null : $this->data['sucesso']; ?></span>
    <span hidden id="erro"><?= empty($this->data['erro'])? null : $this->data['erro']; ?></span>
  </div>

  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    new DataTable('#tabelaCelso');

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

    function confirmaExclusao(id) {
      const nome = document.querySelector(`#nome-${id}`).textContent
      Swal.fire({
        title: `Deseja realmente excluir o paciente ${nome}?`,
        showDenyButton: true,
        confirmButtonText: 'Excluir',
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          console.log('isConfirmed')
          window.open(`/sinteag/public/EditarPaciente/excluir/${id}`, "_self")
        }
      })
    }
  </script>

  <?php echo $this->endSection(); ?>