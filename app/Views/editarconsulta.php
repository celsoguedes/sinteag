<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
    <div class="container">
        <h1>Editar Consulta</h1>
        <form method= "post" action="atualizar/<?php $editarconsulta['Id_Agendamento']; ?>">
            <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <input type="text" class="form-control" id="nomepaciente" name="nomepaciente" value="<?php echo $editarconsulta['Nome_Paciente']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <input type="text" class="form-control" id="nomeprofissional" name="nomeprofissional" value="<?php echo $editarconsulta['Nome_Profissional']; ?>">
            </div>
            <div class="form-group col-md-1">
                <label for="cars">Tipo de Consulta:</label>
                <select name="tipoConsulta" id="tipoConsulta" name="tipoConsulta">
                    <option value="consultorio">Consultório</option>
                    <option value="residencia">Residência</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $editarconsulta['Valor']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="agendamento" name="agendamento" value="<?php echo $editarconsulta['agendamento']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" class="form-control" id="horario" name="horario" value="<?php echo $editarconsulta['horario']; ?>">
            </div>
            <div class="form-group col-md-1">
                <label for="estado">Status da Consulta:</label>
                <select name="estado" id="estado" name="estado">
                    <option value="aguardando">Aguardando</option>
                    <option value="realizada">Realizada</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>

</script>

<?php echo $this->endSection(); ?>