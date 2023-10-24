<?php echo $this->extend('modelos/layout'); ?>


<?php echo $this->section('conteudo'); ?>
<div class="p-3 mb-2 bg-info text-dark">
  <h1>Relatório de Caixa</h1>
  <div class="container mt-3">

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card">
            <div class="card-header">
              Voce deseja o relatório de:
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="entrada-data">Mês (MM):</label>
                  <input type="text" class="form-control" id="entrada-data">
                </div>
                <div class="form-group">
                  <label for="entrada-valor">Ano (AAAA):</label>
                  <input type="text" class="form-control" id="entrada-valor">
                </div>
                <button type="submit" class="btn btn-primary">Pesquisar</button>

              </form>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Histórico</th>
                  <th>Entradas</th>
                  <th>Saídas</th>
                </tr>
              </thead>

            </table>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Total acumulado
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="acumulado-saldo">Saldo Acumulado:</label>
                    <input type="text" class="form-control" id="acumulado-saldo">
                  </div>
                  <div class="form-group">
                    <label for="mes-saldo">Saldo do Mês:</label>
                    <input type="text" class="form-control" id="mes-saldo">
                  </div>
                  <div class="form-group">
                    <label for="atual-saldo">Saldo Atual:</label>
                    <input type="text" class="form-control" id="atual-saldo">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Totais do Mês
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="total-entradas">Total de Entradas:</label>
                    <input type="text" class="form-control" id="total-entradas">
                  </div>
                  <div class="form-group">
                    <label for="total-saidas">Total de Saídas:</label>
                    <input type="text" class="form-control" id="total-saidas">
                  </div>
                  <div class="form-group">
                    <label for="mes-saldo">Saldo do Mês:</label>
                    <input type="text" class="form-control" id="mes-saldo">
                  </div>
                </form>
              </div>
            </div>
          </div>



        </div>



      </div>
      <?php echo $this->endSection(); ?>

      <?php echo $this->section('scripts'); ?>

      <script>

      </script>

      <?php echo $this->endSection(); ?>