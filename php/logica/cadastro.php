<?php
session_start();
include("conexaoBanco.php");

$nome = mysqli_real_escape_string($conexaoBanco, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexaoBanco, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexaoBanco, trim(md5($_POST['senha'])));

$sql = "SELECT email FROM usuario WHERE email = '$email'";
$resultado = mysqli_query($conexaoBanco, $sql);
$linha = mysqli_fetch_assoc($resultado);

// Verifica se o usuário existe 
if($linha['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

// Insere as informações cadastradas no banco 
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha', NOW())";

// Verifica se tudo foi cadastrado corretamente
if($conexaoBanco->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexaoBanco->close();

header('Location: cadastro.php');
exit;
?>