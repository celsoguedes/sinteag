<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>
<h1>Cadastro de Pacientes</h1>

<style>
  body {
  font-family: Arial, sans-serif;
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

input[type="text"], input[type="date"] {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}
</style>

<form id="cadastroForm">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" required>
  </div>

  <div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" required>
  </div>

  <div class="form-group">
    <label for="dataNascimento">Data de Nascimento:</label>
    <input type="text" id="dataNascimento" required>
  </div>

  <div class="form-group">
    <label for="cep">CEP:</label>
    <input type="text" id="cep" required>
  </div>

  <div class="form-group">
    <label for="logradouro">Logradouro:</label>
    <input type="text" id="logradouro" required>
  </div>

  <div class="form-group">
    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" required>
  </div>

  <div class="form-group">
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" required>
  </div>

  <div class="form-group">
    <label for="uf">UF:</label>
    <input type="text" id="uf" required>
  </div>

  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="text" id="numero" required>
  </div>

  <div class="form-group">
    <label for="complemento">Complemento:</label>
    <input type="text" id="complemento">
  </div>

  <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" required>
  </div>

  <div class="form-group">
    <label for="observacoes">Observações:</label>
    <textarea id="observacoes" required></textarea>
  </div>

  <input type="submit" value="Cadastrar">
</form>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>