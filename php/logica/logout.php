<?php
// No "sair" da página que usuário estará sendo usado esse código para destruir a sessão e voltar para login
session_start();
session_destroy();
header('Location: index.php');
exit();