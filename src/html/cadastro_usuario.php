<html>
    <?php include_once("head.html");?>
<body>
<div class="container">


<form method="post" id="cadastrar_usuario">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">

  <div class="form-group">
    <label for="confirma_email">Confirmação Email</label>
    <input type="text" class="form-control" id="confirma_emailemail" name="email" placeholder="Confirmação Email">
  </div>
  <div class="form-group">  


    <div class="form-group">
    <label for="matricula">Matr&iacute;cula</label>
    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matr&iacute;cula">
  </div>
  <div class="form-group">

    <div class="form-group">
    <label for="cpf">Cpf</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
  </div>

  <div class="form-group">
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="DD/MM/AAAA">
  </div>
  <div class="form-group">

    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone">
  </div>
  <div class="form-group">


    <div class="form-group">
    <label for="nome_mae">Nome da Mãe</label>
    <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Nome da Mãe">
  </div>
  <div class="form-group">

  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
  </div>

  <div class="form-group">
    <label for="confirma_senha">Confirmação Senha</label>
    <input type="password" class="form-control" id="confirma_senha" placeholder="Confirmação da Senha">
  </div>
  
  <button type="submit" name="submit" value="cadastrar" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</body>
</html>