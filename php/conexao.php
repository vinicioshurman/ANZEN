<?php
// esse arquivo é para conexão com o banco e será usado para casdatro e login(pelas minhas pesquisas isso fumciona e parece que economiza código também )
//essas constantes servem para fazer uma conexão com o banco 
define('HOST', '127.0.0.1'); //coloca aqui seu host e seu servidor ,geralmente são esses ,mas se os seus forem diferentes vc muda
define('USUARIO', 'seu usuario');
define('SENHA', 'sua senha');
define('DB', 'anzen');// aqui faz a conexão com o banco

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');