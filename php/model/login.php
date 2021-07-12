<?php

class Login {
    private ?int $id = null,
                $privilegio;
    private String  $nome,
                    $login,
                    $senha;
    
    public function __invoke(array $dados){
        if(isset($dados['id']))
            $this->id = $dados['id'];
        $this->nome = $dados['nome'];
        $this->login = $dados['login'];
        $this->senha = $dados['senha'];
        $this->privilegio = $dados['privilegio'];
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome(String $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setLogin(String $login){
        $this->login = $login;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setSenha(String $senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setPrivilegio(int $privilegio){
        $this->privilegio = $privilegio;
    }
    public function getPrivilegio(){
        return $this->privilegio;
    }
}