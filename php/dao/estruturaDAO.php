<?php
    include_once("../../database.php");

class EstruturaDAO{

    private $banco;

    public function __construct(){
        global $bd;
        $this->banco = $bd;
    }

    public function adicionaEstrutura(array $dados){
        $tnome = "";
        $vnome = "";
        if(isset($dados['nome'])){
            $tnome = "nome, ";
            $vnome = "'" . $dados['nome'] . "', ";
        }

        $sql = "
                INSERT INTO chamador($tnome setor, sala, problema, protocolo) VALUES(
                    $vnome
                    '" . $dados['setor'] . "', 
                    '" . $dados['sala'] . "', 
                    '" . $dados['problema'] . "', 
                    '" . $dados['protocolo'] . "'
                );
            ";
    }


}