<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<div class="p-3 mb-2 bg-info text-dark">
<div class="container">
        <h1>Cadastro de Consultas</h1>
        <form>
            <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <input type="text" class="form-control" id="paciente">
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <input type="text" class="form-control" id="profissional">
            </div>
            <div class="form-group col-md-3">
                <label for="tipo_consulta">Tipo de consulta:</label>
                <input type="text" class="form-control" id="tipo_consulta">
            </div>
            <div class="form-group col-md-3">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor">
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="text" class="form-control" id="data">
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="text" class="form-control" id="horario">
            </div>
            <div class="form-group col-md-2">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>