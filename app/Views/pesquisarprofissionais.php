<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>

<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<h1>Pesquisar Profissionais</h1>

<div class="p-3 mb-2 bg-info text-dark">

  <div class="row mt-3">
    <div class="col-md-9">
      <table class="table" id="tabelaProfissional">
        <thead>
          <tr>
            <th>Profissional</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarprofissionais as $k => $profissional) : ?>
            <tr>
              <td><?php echo $profissional['Nome_Profissional']; ?></td>
              <td><?php echo $profissional['CPF']; ?></td>
              <td><?php echo $profissional['Telefone']; ?></td>
              <td><?php echo $profissional['Sexo']; ?></td>
              <td><a class="btn btn-primary" href="/sinteag/public/EditarProfissional/index/<?php echo $profissional['Id_Profissional']; ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a class="btn btn-danger" href="/sinteag/public/EditarProfissional/excluir/<?php echo $profissional['Id_Profissional']; ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
  new DataTable('#tabelaProfissional');
</script>

<?php echo $this->endSection(); ?>