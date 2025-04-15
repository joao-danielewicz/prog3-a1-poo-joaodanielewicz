<?php
require "Usuario.php";

class Autenticador{
    public array $usuarios;

    // O método construtor somente iniciará a lista de usuários como um array vazio.
    public function __construct(){
        $this->usuarios = [];
    }

    // Primeiramente, verifica se não há nenhum usuário com o mesmo e-mail.
    // Caso negativo, prossegue com o cadastro, instanciando um objeto da classe Usuário e inserindo-o na lista.
    public function Registro($usuario){
        foreach($this->usuarios as $u){
            if($usuario->GetEmail() == $u->GetEmail()){
                return false;
            }
        }

        $usuarionovo = new Usuario($usuario['nome'], $usuario['email'], $usuario['senha']);
        $this->usuarios[] = $usuarionovo;
        return true;
    }

    // Recebe um e-mail e senha informados no formulário de Log-in.
    // Percorre toda a lista de usuários cadastrados, chamando de cada um deles a função Autenticar().
    // Caso um usuário com a smesmas credenciais das informadas seja encontrado, ele será retornado.
    public function Login($post){
        $email = $post['email'];
        $senha = $post['senha'];
        
        foreach($this->usuarios as $u){
            if($u->Autenticar($email, $senha)){
                return $u;
            }
            return false;
        }
    }
}