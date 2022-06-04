    <main class="login-cadastro">
        <h1>Login</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input class="field" type="text" name="usuario" id="usuario" value="" />
            <br>
            <label>Email: </label> <br>
            <input class="field" type="text" name="email" id="email" value="" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha" id="senha" value="" />
            <br>
            <br>
            <input type="submit" name="btnLogar" id="btnLogar" value="Cadastrar" class="btn btn-color-green"/>
            </div>
        </form>
    </main>
  </body>
</html>
<?php
    if(isset($_POST['btnLogar'])){
        $_SESSION['logado']= call_user_func(array('UsuarioController','logar'));
        $_SESSION['login']= $_POST['login'];
        header('Location: index.php');
    }
?>
