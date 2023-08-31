<?php echo $this->extend('modelos/layout'); ?>
    
<?php echo $this->section('conteudo');?>

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
<title>Cadastro de Pacientes</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Cadastro de Profissionais</h1>
  <form id="cadastroForm" onsubmit="submitForm(event)">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" required>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" required>

    <label for="dataNascimento">Data de Nascimento:</label>
    <input type="date" id="dataNascimento" required>

    <label for="especialidade">Especialidade:</label>
    <input type="text" id="especialidade" required>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" required>

    <label for="logradouro">Logradouro:</label>
    <input type="text" id="logradouro" required>

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" required>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" required>

    <label for="uf">UF:</label>
    <input type="text" id="uf" required>

    <label for="numero">Número:</label>
    <input type="text" id="numero" required>

    <label for="complemento">Complemento:</label>
    <input type="text" id="complemento">

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" required>

    <button type="submit">Cadastrar</button>
  </form>


<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    
</script>

<?php echo $this->endSection();?>