<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo');
?>
<div class="p-3 mb-2 bg-info text-dark">
    <div class="container">
        <h1>Cadastro de Consulta</h1>

        <form action="/sinteag/public/CadastrarConsultas/cadastrar" method="post">
            <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <select class="paciente-select form-control" name="Id_Paciente">
                    <option value="">Selecione uma opção</option>
                    <?php foreach ($this->data['pacientes'] as $paciente) : ?>
                        <option value="<?= $paciente['Id_Paciente'] ?>"><?= $paciente['Nome_Paciente'] ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('Id_Paciente'); ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <select class="profissional-select form-control" name="Id_Profissional">
                    <option value="">Selecione uma opção</option>
                    <?php foreach ($this->data['profissionais'] as $profissional) : ?>
                        <option value="<?= $profissional['Id_Profissional'] ?>"><?= $profissional['Nome_Profissional'] ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('Id_Profissional'); ?></span>
            </div>
            <div class="form-group col-md-3">
                <label for="tipoConsulta">Tipo de Consulta:</label>
                <select name="tipoConsulta" id="tipoConsulta">
                    <option value="">Selecione uma opção</option>
                    <option value="consultorio">Consultório</option>
                    <option value="residencia">Residência</option>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('tipoConsulta'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" id="valor" name="valor">
                <span class="badge bg-danger"><?= validation_show_error('valor'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data" name="data">
                <span class="badge bg-danger"><?= validation_show_error('data'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" pattern="[0-9]{2}:[0-9]{2}" class="form-control" id="horario" name="horario">
                <span class="badge bg-danger"><?= validation_show_error('horario'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="estado">Status da Consulta:</label>
                <select id="estadoconsulta" name="estado_consulta">
                    <option value="">Selecione uma opção</option>
                    <option value="aguardando">Aguardando</option>
                    <option value="realizada">Realizada</option>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('estado_consulta'); ?></span>
            </div>
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <span hidden id="erro"><?= empty($this->data['erro'])? null : $this->data['erro']; ?></span>
    </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
    $(document).ready(function() {
        $('.paciente-select').select2();
        $('.profissional-select').select2();
    });

    document.addEventListener('DOMContentLoaded', () => {

    const erro = document.querySelector('#erro').innerText
    if (erro) {
        Swal.fire({
            icon: 'error',
            title: 'Desculpe',
            text: erro,
        })
    }
    })
</script>

<?php echo $this->endSection(); ?>