    <main class="login-cadastro">
        <h1>Login</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input class="field" type="text" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" />
            <br>
            <br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar" class="btn btn-color-green"/>
            </div>
        </form>
    </main>
  </body>
</html>