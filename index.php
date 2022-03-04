<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

</head>

<body>
                    <!-- verificando se o login está incorreto -->
                    <?php
                    if(isset($_SESSION['nao_autenticado'])){
                      echo 'email e/ou senha incorretos';
                    } else{
                      unset($_SESSION['nao_autenticado']);
                    }
                    ?>
    

                         <form action="login.php" method="post">
                             <label for="email">Email</label><br>
                             <input type="text" id="email" name="email"><br>
                             <label for="senha">Senha</label><br>
                             <input type="text" id="senha" name="senha" ><br><br>
                             <input type="submit" value="Entrar"><br>
                                <a href="cadastro/pg_cadastro.php">Cadastrar</a>
                        </form>
              
</body>

</html>