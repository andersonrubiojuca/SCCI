<?php

class Estrutura{
    private int $id;
    private String $nome,
        $local,
        $sala,
        $problema;
    
    // eu nao gosto de forçar um objeto a ter todos os atributos,
    // já que o php não aguenta sobrecarga; entao eu uso o invoke
    public function __invoke(array $dados){

        if(isset($dados['id']))
            $this->id = $dados['id'];

        $this->nome = $dados['nome'];
        $this->local = $dados['local'];
        $this->sala = $dados['sala'];
        $this->problema = $sala['problema'];
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
}