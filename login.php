<!-- Este formulário receberá somente o e-mail e senha do usuário que deseja conectar-se ao sistema. -->
<!-- Também dá a opção de armazenar o e-mail em cookie para asua posterior exibição no Dashboard. -->
<form action="processa_login.php" method="post">
    <label for="email"></label>
    <input type="email" name="email" placeholder="E-mail" required>

    <input type="checkbox" name="lembraremail">
    <label for="lembraremail">Lembrar e-mail?</label>

    <label for="senha"></label>
    <input type="password" name="senha" placeholder="Senha" required>

    <input type="submit" name="enviar">
</form>