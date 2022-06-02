    <main class="login-cadastro">
        <h1>Cadastro</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input class="field" type="text" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha" id="senha" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha" id="senha" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" />
            <br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar" class="btn btn-color-green"/>
            </div>

        </form>
    </main>
  </body>
</html>
<?php
    if(isset($_POST['btnCadastrar'])){
        call_user_func(array('UsuarioController','cadastro'));
        header('Location: index.php?action=principal');
    }
?>
