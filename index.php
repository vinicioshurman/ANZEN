<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'inicio') {
        $title = "Ínicio";
        require_once 'view/head.php';
        require_once 'view/navbar.php';
        require_once 'view/inicio.php';
    }

    if ($_GET['action'] == 'login') {
        $title = "Login";
        require_once 'view/head.php';
        require_once 'view/navbar.php';
        require_once 'view/login.php';
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

    if ($_GET['action'] == 'principal') {
        $title = "";
        require_once 'view/head.php';
        require_once 'view/navbar.php';
        require_once 'view/principal.php';
    } else {
    $title = "Ínicio";
    require_once 'view/head.php';
    require_once 'view/inicio.php';
    }
}

?>

