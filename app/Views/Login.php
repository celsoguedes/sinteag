<?php echo $this->extend('modelos/layout_minimo'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
    <h2>Sistema Integrado de Agendamentos</h2>
    <div class="container mt-4">
        <div class="col-md-10 mx-auto col-lg-5">
            <form action="/sinteag/public/Login" method="post" class="p-4 p-md-5 border rounded-3">
                <div class="form-floating mb-3">
                    <input name="usuario" required type="text" class="form-control" id="inputLogin" paceholder="login" />
                    <label for="inputLogin">Login</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="senha" required type="password" class="form-control" id="inputSenha" paceholder="Senha" />
                    <label for="inputSenha">Senha</label>
                </div>

                <button class="W-100 btn btn-lg btn-success" type="submit">Entrar</button>
            </form>
            <span hidden id="erro"><?= empty($this->data['erro']) ? null : $this->data['erro']; ?></span>
        </div>
    </div>

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