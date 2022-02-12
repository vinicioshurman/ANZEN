<?php
    // Senha fixa no código pois não temos um banco de dados
    $usuario = "admin";
    $senhaMD5 = md5('admin');
    $senhaCrypt = crypt($senhaMD5, 'etec');

    // Verifica se a variavel está setada, ou seja, se ela possui um valor diferente de NULL
    // isset();

    // Verifica se o botão foi pressionado
    if(isset($_POST['btnLogin'])){
        
        // Criptografa a senha do usuario
        $senhaUser = crypt(md5($_POST['pass']), 'etec');

        // Verifica se a senha criptografada digitada pelo usuario($senhaUser) bate com a senha criptografada armazenada no banco de dados($senhaCrypt)
        if($_POST['username'] == $usuario && $senhaUser == $senhaCrypt){
            
            // Se os dados estiverem corretos
            header('Location: index.php?status=1');
        } else{

            // Se os dados estiverem incorretos 
            header('Location: index.php?status=2');
        }
    } else{
        echo 'Erro inesperado.';
    }
?>