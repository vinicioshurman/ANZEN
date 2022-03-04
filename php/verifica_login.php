<?php
//startando a sessão, caso o usário não exista vai levar a primeira página
session_start();
if(!$_SESSION['email']) {
	header('Location: index.php');
	exit();
}