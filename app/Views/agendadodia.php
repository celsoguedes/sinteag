<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>

<div class="p-3 mb-2 bg-info text-dark">
<h1>Agenda do Dia</h1>
<div class="row mt-3">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th>Paciente</th>
          <th>Hora</th>
          <th>Quiroprata</th>
          <th>Telefone</th>
        </tr>
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>