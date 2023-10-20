<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>



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
        <?php foreach ($pesquisarpacientes as $k=>$paciente): //aqui, $k = chave (0,1,2,3) e $paciente é um vetor dentro de cada chave, com os dados que a gente precisa. ?>
          <tr>
            <td><?php echo $paciente['Nome_Paciente']; // e aqui, na hora de mostrar não é com -> (objeto), mas sim com [''] (posição)?></td>
            <td><?php echo $paciente['CPF'];?></td>
            <td><?php echo $paciente['Telefone'];?></td>            
            <td><a class="btn btn-primary" href="/sinteag/public/EditarPaciente/<?php echo $paciente['Id_Paciente']; ?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a class="btn btn-danger" href="/sinteag/public/ExcluirPaciente/<?php echo $paciente['Id_Paciente']; ?>"><i class="bi bi-trash"></i></a></td>
        <?php endforeach; ?>
          </tr>
      </tbody>
      
    </table>

    

    /*
    ok vou terminar todas as consultas para depois ie para o preencimento dos fomularios... estou indo no rumo certo ou estou muito fora?
    ciente e de acordo, toca o barco que o porto é logo ali, meu amigo
    
conseguiu captar essa arruaça que eu fiz ai?
mais ou menos
coloquei uma coluna nova na tabela pra ter um link pra editar cada linha
ai tem que colocar um excluir também
e o ideal é que envie o id ao inves do CPF ...

entendi... vou trabalhar e duvidas te perturbo
fechou valeu

    */
    
    
  </div>
</div>



<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    new DataTable('#tabelaCelso');
</script>

<?php echo $this->endSection();?>
