<?php
session_start();
include("conexao/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
//verifica se o usuário existe 
if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}
//insere as informações cadastradas no banco 
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha', NOW())";
//verifica se tudo foi cadastrado corretamente
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>