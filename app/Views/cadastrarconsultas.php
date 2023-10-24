<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo');
d($this->data['pacientes']);
?>
<div class="p-3 mb-2 bg-info text-dark">
    <div class="container">
        <h1>Cadastro de Consulta</h1>

        <form action="/sinteag/public/CadastrarConsultas/cadastrar" method="post">
            <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <select class="paciente-select form-control" name="Id_Paciente">
                    <?php foreach ($this->data['pacientes'] as $paciente) : ?>
                        <option value="<?= $paciente['Id_Paciente'] ?>"><?= $paciente['Nome_Paciente'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <select class="profissional-select form-control" name="Id_Profissional">
                    <?php foreach ($this->data['profissionais'] as $profissional) : ?>
                        <option value="<?= $profissional['Id_Profissional'] ?>"><?= $profissional['Nome_Profissional'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label for="cars">Tipo de Consulta:</label>
                <select name="tipoConsulta" id="tipoConsulta" name="tipo_consulta">
                    <option value="consultorio">Consultório</option>
                    <option value="residencia">Residência</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor">
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" class="form-control" id="horario" name="horario">
            </div>
            <div class="form-group col-md-2">
                <label for="estado">Status da Consulta:</label>
                <select id="estadoconsulta" name="estado_consulta">
                    <option value="aguardando">Aguardando</option>
                    <option value="realizada">Realizada</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
    $(document).ready(function() {
        $('.paciente-select').select2();
        $('.profissional-select').select2();
    });
</script>

<?php echo $this->endSection(); ?>