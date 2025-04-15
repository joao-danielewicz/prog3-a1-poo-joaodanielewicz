<?php
// Reiniciamos a variável de sessão, apagando todos os dados relacionados a ela.
// Apagamos o e-mail do Cookie.
// O usuário é redirecionado à página inicial.
session_start();
session_destroy();
$_SESSION = [];
setcookie("email", "", (time() - 3600));
header('Location: index.php');