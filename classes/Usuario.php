<?php

class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    // Ao construirmos um novo usuário, já criptografamos sua senha.
    public function __construct(string $nome, string $email, string $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    // Para autenticar o log-in de um usuário, primeiro verificamos se o e-mail fornecido é válido com o do cadastro.
    // Após isso, utilizamos a função password_verify que compara o hash criptográfico com a senha em texto digitada no campo de log-in.
    // Caso as credenciais sejam válidas, retorna verdadeiro.
    public function Autenticar(string $email, string $senha){
        if($email != $this->email){
            return false;
        }
        if(!password_verify($senha, $this->senha)){
            return false;
        }

        return true;
    }

    // Estas funções nos permitem ler o nome e e-mail do usuário, para que possamos escrevê-los no dashboard.
    public function GetNome(){
        return $this->nome;
    }
    public function GetEmail(){
        return $this->email;
    }
}