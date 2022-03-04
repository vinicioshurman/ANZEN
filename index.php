<?php
// Esta página chamada index.php servira como o controlador do site, que irá redirecionar o usuário para onde ele deve ir. Esta é a página principal do site, que controla o site.

// Startando a sessão, caso o usuário não exista vai levar a primeira página
session_start();

if(!$_SESSION['email']) {
	header('Location: pg_home.php');
	exit();
}
?>
