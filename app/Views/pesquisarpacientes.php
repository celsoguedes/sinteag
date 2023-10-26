<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo');
?>



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
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesquisarpacientes as $k => $paciente) : //aqui, $k = chave (0,1,2,3) e $paciente é um vetor dentro de cada chave, com os dados que a gente precisa. 
          ?>
            <tr>
              <td><?php echo $paciente['Nome_Paciente']; // e aqui, na hora de mostrar não é com -> (objeto), mas sim com [''] (posição)
                  ?></td>
              <td><?php echo $paciente['CPF']; ?></td>
              <td><?php echo $paciente['Telefone']; ?></td>
              <td><a class="btn btn-primary" href="/sinteag/public/EditarPaciente/index/<?php echo $paciente['Id_Paciente']; ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a class="btn btn-danger" href="/sinteag/public/EditarPaciente/excluir/<?php echo $paciente['Id_Paciente']; ?>"><i class="bi bi-trash"></i></a></td>
            <?php endforeach; ?>
            </tr>
        </tbody>

      </table>


    </div>
    <span hidden id="message"><?= $this->data['message']; ?></span>
  </div>

  <?php echo $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>

  <script>
    new DataTable('#tabelaCelso');

    document.addEventListener('DOMContentLoaded', () => {
      const message = document.querySelector('#message').innerText
      if (message) {
        Swal.fire({
          icon: 'error',
          title: 'Desculpe',
          text: message,
        })
      }
    })
    
  </script>

  <?php echo $this->endSection(); ?>