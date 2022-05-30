<?php
session_start();

require_once 'controller/UsuarioController.php';

require_once 'head.php';

if(isset($_GET['action'])){
    if($_GET['action'] == 'editar'){
        $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
        require_once 'view/cadUsuario.php';
    }

    if($_GET['action'] == 'listar'){
        require_once 'view/listUsuario.php';
    }

    if($_GET['action'] == 'excluir'){
        $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
        require_once './view/listUsuario.php';
    } 
    if (isset($_SESSION['logado'])&& $_SESSION['logado']==true) 
    {
        require_once 'view/menu.php';
       # aqui serão chamadas as funções quando tiver
    }else {
        if (isset($_GET['logar'])) {
            require_once 'view/login.php';
        } else{
            require_once 'principal.php';
        }
    }
}

  
?>