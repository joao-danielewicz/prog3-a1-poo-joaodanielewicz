<?php
session_start();
?>

<!-- Resgatamos o nome do usuário da Sessão para que possamos escrevê-lo. -->
<!-- Verificamos a solicitação de lembrança do e-mail no Cookie, e caso afirmativo, também o mostramos no painel. -->
<!-- Ao fim, damos a opção de logout. -->
<h1>Dashboard</h1>
<hr>
<p>Bem-vindo(a), <?php echo($_SESSION['nome']) ?>!</p>
<?php
    if(isset($_COOKIE['email'])){
        echo "<p>Seu e-mail é: ".$_COOKIE['email']."</p>";
    }
?>
<a href="logout.php">Logout.</a>