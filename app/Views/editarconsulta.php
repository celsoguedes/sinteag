<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<div class="p-3 mb-2 bg-info text-dark">
<div class="container">
        <h1>Editar Consulta</h1>
        <form>
            <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <input type="text" class="form-control" id="paciente">
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <input type="text" class="form-control" id="profissional">
            </div>
            <div class="form-group col-md-1">
            <label for="cars">Tipo de Consulta:</label>
                <select name="tipoConsulta" id="tipoConsulta">
                <option value="consultorio">Consultório</option>
                <option value="residencia">Residência</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor">
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data">
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" class="form-control" id="horario">
            </div>
            <div class="form-group col-md-1">
            <label for="consulta">Status da Consulta:</label>
                <select name="tipoConsulta" id="tipoConsulta">
                <option value="aguardando">Aguardando</option>
                <option value="realizada">Realizada</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>