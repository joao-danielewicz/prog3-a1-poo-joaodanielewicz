<?php
// Para que possamos armazenar os usuários cadastrados na sessão, precisamos chamar a classe Autenticador.
// Dentro da dessão guardamos uma instância desta classe, que estará disponível globalmente para uso do Login, Cadastro, e retorno das informações
    // do usuário credenciado.
require "classes/Autenticador.php";
session_start();
$_SESSION['autenticador'] = new Autenticador();

// Chamamos o método Registro da classe Autenticador. Se ele for bem-sucedido, encaminhamos o usuário para a página de Log-in.
// Caso negativo, isto indica que o e-mail já está sendo usado. O usuário será enviado para a página de cadastro novamente.
if(isset($_POST)){
    if($_SESSION['autenticador']->Registro($_POST)){
        echo("Cadastro bem-sucedido!");
        sleep(3);
        header('Location: login.php');
    }else{
        echo("Este e-mail já está sendo usado.");
        sleep(3);
        header('Location: cadastro.php');
    };
}