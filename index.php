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

    if ($_GET['action'] == 'cadastro') {
        $title = "Cadastro";
        require_once 'view/head.php';
        require_once 'view/navbar.php';
        require_once 'view/cadastro.php';
    }

    if ($_GET['action'] == 'sobreNos') {
        $title = "Sobre Nós";
        require_once 'view/head.php';
        require_once 'view/navbar.php';
        require_once 'view/sobreNos.php';
    }

    if (isset($_SESSION['logado'])&& $_SESSION['logado']==true) 
    {
        require_once 'view/menu.php';
       # aqui serão chamadas as funções quando tiver
    }else {
        if (isset($_GET['logar'])) {
            $title = "Login";
            require_once 'view/head.php';
            require_once 'view/navbar.php';
            require_once 'view/login.php';
        } else{
            $title = "Ínicio";
            require_once 'view/head.php';
            require_once 'view/navbar.php';
            require_once 'view/inicio.php';
        }
    }
}
  
?>