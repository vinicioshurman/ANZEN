<?php
session_start();
include('conexaoBanco.php');

// Verificando se os campos foram digitados
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

// Verificando se as informações estão de acordo com o banco 
$email = mysqli_real_escape_string($conexaoBanco, $_POST['email']);
$senha = mysqli_real_escape_string($conexaoBanco, $_POST['senha']);

$query = "select nome from usuario where email = '{$email}' and senha = md5('{$senha}')";

$resultado = mysqli_query($conexaoBanco, $query);

$linha = mysqli_num_rows($resultado);

if($linha == 1) {
	$usuario_bd = mysqli_fetch_assoc($resultado);
	$_SESSION['email'] = $usuario_bd['email'];
	header('Location: pg_tabelaPrincipal.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}