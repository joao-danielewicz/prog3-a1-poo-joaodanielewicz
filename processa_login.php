<?php
// Novamente faremos uso da classe Autenticador armazenada na variável global de Sessão. Para tal, realizamos o include e session_start.
require "classes/Autenticador.php";
session_start();
if(isset($_POST)){
    
    // Tentamos realizar o login com as credenciais informadas. Caso haja alguma falha, há a possibilidade de erro de digitação do log-in ou
        // que o usuário não possui conta. Em ambos os casos, é dada a opção de retornar ao cadastro.
    if($_SESSION['autenticador']->Login($_POST)){
        // Se o log-in for bem-sucedido, armazenamos o nome do usuário na sessão para exibi-lo no Dashboard.
        $_SESSION['nome'] = ($_SESSION['autenticador']->Login($_POST))->GetNome();

        // Também verificamos se, na área de log-in, o usuário solicitou que seu e-mail fosse lembrado.
        // Caso sim, armazenamos o e-mail no cookie.
        // Caso não, limpamos o cookie por precaução para que não exiba nada, pois podem ficar resíduos de execuções anteriores.
        if(isset($_POST['lembraremail'])){
            $email = ($_SESSION['autenticador']->Login($_POST))->GetEmail();
            setcookie("email", $email);
        }else{
            setcookie("email", "", (time() - 3600));
        }
        header('Location: dashboard.php');
    }else{
        echo("Verifique seu log-in e tente novamente.");
        echo("\nNão possui conta? <a href='cadastro.php'>Cadastre-se.<a/>");
    };
}