<?php

class Login {
    private ?int $id = null,
                $privilegio;
    private String  $nome,
                    $usuario,
                    $senha;
    
    public function __invoke(array $dados){
        if(isset($dados['id']))
            $this->id = $dados['id'];
        $this->nome = $dados['nome'];
        $this->usuario = $dados['usuario'];
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
    public function setUsuario(String $usuario){
        $this->usuario = $usuario;
    }
    public function getUsuario(){
        return $this->usuario;
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