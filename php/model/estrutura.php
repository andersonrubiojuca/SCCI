<?php

class Estrutura{
    private int $id;
    private String $nome,
        $local,
        $sala,
        $problema,
        $protocolo,
        $retorno,
        $andamento;
    
    // eu nao gosto de forçar um objeto a ter todos os atributos,
    // já que o php não aguenta sobrecarga; entao eu uso o invoke
    public function __invoke(array $dados){

        if(isset($dados['id']))
            $this->id = $dados['id'];

        $this->nome = $dados['nome'];
        $this->local = $dados['local'];
        $this->sala = $dados['sala'];
        $this->problema = $sala['problema'];

        if(isset($dados['protocolo']))
            $this->protocolo = $dados['protocolo'];
        if(isset($dados['retorno']))
            $this->retorno = $dados['retorno'];
        if(isset($dados['andamento']))
            $this->andamento = $dados['andamento'];
    }

    public function setId (int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome (String $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setLocal (String $local){
        $this->local = $local;
    }
    public function getLocal(){
        return $this->local;
    }
    public function setSala (String $sala){
        $this->sala = $sala;
    }
    public function getSala(){
        return $this->sala;
    }
    public function setProblema (String $problema){
        $this->problema = $problema;
    }
    public function getProblema(){
        return $this->problema;
    }
    public function setProtocolo (String $protocolo){
        $this->protocolo = $protocolo;
    }
    public function getProtocolo(){
        return $this->protocolo;
    }
    public function setRetorno (String $retorno){
        $this->retorno = $retorno;
    }
    public function getRetorno(){
        return $this->retorno;
    }
    public function setAndamento (String $andamento){
        $this->andamento = $andamento;
    }
    public function getAndamento(){
        return $this->andamento;
    }
}