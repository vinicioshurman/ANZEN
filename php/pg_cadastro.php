<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
</head>

<body>
  <!-- vai levar o usuario direto pra página principal -->
    <?php 
    if (isset($_SESSION ['status_cadastro'])) {
        header('location:painel/painel.php');
    }
    ?>
   <form action="cadastrar.php" method="post">
  <label for="email">Email</label><br>
  <input type="text" id="email" name="email" value="email"><br>
  <label for="nome">Nome</label><br>
  <input type="text" id="nome" name="nome" value="nome"><br>
  <label for="senha">Senha</label><br>
  <input type="text" id="senha" name="senha" value="senha"><br><br>
  <input type="submit" value="Cadastrar">
</form> 
            
</body>

</html>