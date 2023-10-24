<?php echo $this->extend('modelos/layout'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
    <h2>Sistema Integrado de Agendamentos</h2>
    <div class="container mt-4">
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3">
                <div class="form-floating mb-3">
                    <input type="login" class="form-control" id="inputLogin" paceholder="login" />
                    <label for="inputLogin">Login</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="Senha" class="form-control" id="inputSenha" paceholder="Senha" />
                    <label for="inputSenha">Senha</label>
                </div>
                <div class="checkbox mb -3">
                    <label>
                        <input type="checkbox" value="lembrar de mim">Lembrar de mim
                    </label>
                </div>
                <button class="W-100 btn btn-lg btn-success" type="submit">Entrar</button>
            </form>
        </div>
    </div>



    <?php echo $this->endSection(); ?>

    <?php echo $this->section('scripts'); ?>

    <script>

    </script>

    <?php echo $this->endSection(); ?>