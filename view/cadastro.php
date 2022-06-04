    <main class="login-cadastro">
        <h1>Cadastro</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input class="field" type="text" name="usuario" id="usuario" value="<?php echo isset($usuario) ? $usuario->getUsuario() : '' ?>" />
            <br>
            <label>Email: </label> <br>
            <input class="field" type="text" name="email" id="email" value="<?php echo isset($usuario) ? $usuario->getEmail() : '' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha" id="senha" value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input class="field" type="password" name="senha2" id="senha2" value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>" />
            <br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar" class="btn btn-color-green" />
            </div>

        </form>
    </main>
    </body>

    </html>
    <?php
    if (isset($_POST['btnCadastrar'])) {
        call_user_func(array('UsuarioController', 'cadastro'));
        $_SESSION['logado'] = call_user_func(array('UsuarioController', 'logar'));
        $_SESSION['login'] = $_POST['login'];
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
            header('Location: index.php?action=principal');
        } else {
            header('Location: index.php?action=inicio');
        }
        
    }
    ?>