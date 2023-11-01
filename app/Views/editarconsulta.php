<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
    <div class="container">
        <h1>Editar Consulta</h1>
        <form method="post" action="atualizar/<?php echo $editarconsulta['Id_Agendamento']; ?>">
            <div class="form-group col-md-6">
                <label for="Id_Paciente">Paciente:</label>
                <select class="paciente-select form-control" name="Id_Paciente" id="Id_Paciente">
                    <option value="">Selecione uma opção</option>
                    <?php foreach ($this->data['pacientes'] as $paciente) : ?>
                        <option value="<?= $paciente['Id_Paciente'] ?>" <?php if ($paciente['Id_Paciente'] == $editarconsulta['Paciente_Id']) echo " selected "; ?>>
                            <?= $paciente['Nome_Paciente'] ?></option>>
                    <?php endforeach; ?>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('Id_Paciente'); ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <select class="profissional-select form-control" name="Id_Profissional">
                    <option value="">Selecione uma opção</option>
                    <?php foreach ($this->data['profissionais'] as $profissional) : ?>
                        <option value="<?= $profissional['Id_Profissional'] ?>" <?php if ($profissional['Id_Profissional'] == $editarconsulta['Profissional_Id']) echo "selected"; ?>>
                            <?= $profissional['Nome_Profissional'] ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('Id_Profissional'); ?></span>
            </div>
            <div class="form-group col-md-3">
                <label for="tipoConsulta">Tipo de Consulta:</label>
                <select class="tipoConsulta-select form-control" name="tipoConsulta" id="tipoConsulta">
                    <option value="">Selecione uma opção</option>
                    <option <?php if ($editarconsulta['Tipo_Consulta'] == 'consultorio') echo "selected"; ?> value="consultorio">Consultório</option>
                    <option <?php if ($editarconsulta['Tipo_Consulta'] == 'residencia') echo "selected"; ?> value="residencia">Residência</option>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('tipoConsulta'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $editarconsulta['Valor']; ?>">
                <span class="badge bg-danger"><?= validation_show_error('valor'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data" name="data" value="<?php echo $editarconsulta['agendamento']; ?>">
                <span class="badge bg-danger"><?= validation_show_error('data'); ?></span>
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" class="form-control" id="horario" name="horario" value="<?php echo $editarconsulta['horario']; ?>">
                <span class="badge bg-danger"><?= validation_show_error('horario'); ?></span>
            </div>
            <div class="form-group col-md-3">
                <label for="estado">Status da Consulta:</label>
                <select class="estado-select form-control" name="estado" id="estado">
                    <option value="">Selecione uma opção</option>
                    <option <?php if ($editarconsulta['Estado'] == 'aguardando') echo "selected"; ?> value="aguardando">Aguardando</option>
                    <option <?php if ($editarconsulta['Estado'] == 'realizada') echo "selected"; ?> value="realizada">Realizada</option>
                </select>
                <span class="badge bg-danger"><?= validation_show_error('estado'); ?></span>
            </div>
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Editar</button>
        </form>
        <span hidden id="erro"><?= empty($this->data['erro']) ? null : $this->data['erro']; ?></span>
    </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>

    $(document).ready(function() {
        $('.paciente-select').select2();
        $('.profissional-select').select2();
        $('.tipoConsulta-select').select2();
        $('.estado-select').select2();
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