<?php

class Ouvidoria {
    private int $id;
    private ?String $nome = null,
        $email = null,
        $conteudo,
        $protocolo,
        $retorno = null,
        $andamento;

    public function __invoke(array $dados){
        if(isset($dados['id']))
            $this->id = $dados['id'];
        if(isset($dados['nome']))
            $this->nome = $dados['nome'];
        if(isset($dados['email']))
        $this->email = $dados['email'];

        $this->conteudo = $dados['conteudo'];

        if(isset($dados['protocolo']))
            $this->protocolo = $dados['protocolo'];
        if(isset($dados['retorno']))
            $this->retorno = $dados['retorno'];
        if(isset($dados['andamento']))
            $this->andamento = $dados['andamento'];
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setConteudo(string $conteudo){
        $this->conteudo = $conteudo;
    }
    public function getConteudo(){
        return $this->conteudo;
    }
    public function setProtocolo(string $protocolo){
        $this->protocolo = $protocolo;
    }
    public function getProtocolo(){
        return $this->protocolo;
    }
    public function setRetorno(string $retorno){
        $this->retorno = $retorno;
    }
    public function getRetorno(){
        return $this->retorno;
    }
    public function setAndamento(string $andamento){
        $this->andamento = $andamento;
    }
    public function getAndamento(){
        return $this->andamento;
    }
}