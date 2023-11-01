<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
    <div class="container">
        <h1>Editar Consulta</h1>
        <form method="post" action="atualizar/<?php echo $editarconsulta['Id_Agendamento']; ?>">
        <div class="form-group col-md-6">
                <label for="paciente">Paciente:</label>
                <select class="paciente-select form-control" name="Id_Paciente">
                    <?php foreach ($this->data['pacientes'] as $paciente) : ?>
                        <option value="<?= $paciente['Id_Paciente'] ?>"
                        <?php if($paciente['Id_Paciente'] == $editarconsulta['Paciente_Id']) echo " selected "; ?>>
                        <?= $paciente['Nome_Paciente'] ?></option>>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="profissional">Profissional:</label>
                <select class="profissional-select form-control" name="Id_Profissional">
                    <?php foreach ($this->data['profissionais'] as $profissional) : ?>
                        <option value="<?= $profissional['Id_Profissional'] ?>" 
                        <?php if($profissional['Id_Profissional'] == $editarconsulta['Profissional_Id']) echo " selected "; ?>>
                        <?= $profissional['Nome_Profissional'] ?></option>
                    <?php endforeach; ?>
                </select>
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
                <input type="date" class="form-control" id="data" name="data" value="<?php echo $editarconsulta['agendamento']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="horario">Horário:</label>
                <input type="time" class="form-control" id="horario" name="horario" value="<?php echo $editarconsulta['horario']; ?>">
            </div>
            <div class="form-group col-md-1">
                <label for="estado">Status da Consulta:</label>
                <select name="estado" id="estado_consulta" name="estado_consulta">
                    <option value="aguardando">Aguardando</option>
                    <option value="realizada">Realizada</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        <span hidden id="erro"><?= empty($this->data['erro'])? null : $this->data['erro']; ?></span>
    </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>

<script>
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