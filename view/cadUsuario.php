<?php
   require_once "./controller/UsuarioController.php"
   ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <script src="https://kit.fontawesome.com/58e46e1e4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/styles.css" />
    <title>Header</title>
  </head>
  <body>
    <nav class="navbar">
        <a class="logo" href="index.php">
          <img src="../img/logoTEXT.png" alt="logo_anzen" height="30" />
        </a>
        <form class="nav-items" >
          <button type="button" class="btn btn-color-white underline">
            Sobre Nós
          </button>
          <button type="button" class="btn btn-color-white underline">
            Criar conta
          </button>
          <button type="button" class="btn btn-color-green">
            Entrar
          </button>
        </form>
      </div>
    </nav>
    <!-- background images -->
    <?php
   require_once "./controller/UsuarioController.php"
   ?>

    <main class="login-cadastro">
        <h1>Cadastro</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input class="field" type="text" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" />
            <br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar" class="btn btn-color-green"/>
            </div>
        </form>
    </main>
  </body>
</html>
