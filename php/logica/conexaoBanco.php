<?php
// Esse arquivo é para conexão com o banco e será usado para cadastro e login(pelas minhas pesquisas isso funciona e parece que economiza código também )
// Essas constantes servem para fazer uma conexão com o banco 
define('HOST', '127.0.0.1'); // Coloca aqui seu host e seu servidor, geralmente são esses, mas se os seus forem diferentes vc muda
define('USUARIO', 'seu usuario');
define('SENHA', 'sua senha');
define('DB', 'anzen'); // Aqui faz a conexão com o banco

$conexaoBanco = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');