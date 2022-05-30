<?php
// Página que o usuário vai entrar quando fizer login
session_start();
include('index.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>