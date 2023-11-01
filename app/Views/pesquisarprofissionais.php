<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>

<h1>Pesquisar Profissionais</h1>

<div class="p-3 mb-2 bg-info text-dark">

  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table" id="tabelaProfissional">
        <thead>
          <tr>
            <th>Profissional</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarprofissionais as $k => $profissional) : ?>
            <tr>
              <td id="nome-<?= $profissional['Id_Profissional']; ?>"><?= $profissional['Nome_Profissional']; ?></td>
              <td><?php echo $profissional['CPF']; ?></td>
              <td><?php echo $profissional['Telefone']; ?></td>
              <td><?php echo $profissional['Sexo']; ?></td>
              <td style="white-space: nowrap;">
                <a class="btn btn-primary" href="/sinteag/public/EditarProfissional/index/<?php echo $profissional['Id_Profissional']; ?>"><i class="bi bi-pencil-square"></i></a>
                <button id="btnExcluir" onclick="confirmaExclusao(<?= $profissional['Id_Profissional']; ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <span hidden id="sucesso"><?= empty($this->data['sucesso'])? null : $this->data['sucesso']; ?></span>
  <span hidden id="erro"><?= empty($this->data['erro'])? null : $this->data['erro']; ?></span>
</div>

<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
  new DataTable('#tabelaProfissional', {language: {url: '/sinteag/public/pt-BR.json'}});

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
        title: `Deseja realmente excluir o profissional ${nome}?`,
        showDenyButton: true,
        confirmButtonText: 'Excluir',
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          window.open(`/sinteag/public/EditarProfissional/excluir/${id}`, "_self")
        }
      })
    }
</script>

<?php echo $this->endSection(); ?>