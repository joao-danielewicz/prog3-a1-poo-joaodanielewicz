<!-- Um formulário simples que utiliza o método POST e encaminha o usuário para o processa_cadastro. -->
<!-- Os campos são definidos como required para que suas definições sejam obrigatórias, evitando envios vazios. -->
<form action="processa_cadastro.php" method="post">
    <label for="nome"></label>
    <input type="text" name="nome" placeholder="Nome" required>

    <label for="email"></label>
    <input type="email" name="email" placeholder="E-mail" required>

    <label for="senha"></label>
    <input type="password" name="senha" placeholder="Senha" required>

    <input type="submit" name="enviar">
</form>