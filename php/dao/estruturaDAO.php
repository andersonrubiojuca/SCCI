<?php
    include_once("../../database.php");

class EstruturaDAO{

    private $banco;

    public function __construct(){
        global $bd;
        $this->banco = $bd;
    }

    private function conn(String $sql){
        $conn = mysqli_connect($this->banco['endereco'], $this->banco['login'], $this->banco['senha'], $this->banco['feedback']);
        return mysqli_query($conn,$sql) or die('Could not connect to MySQL: ' . mysqli_error($conn));
    }

    public function adicionaEstrutura(array $dados){
        $tnome = "";
        $vnome = "";
        if(isset($dados['nome'])){
            $tnome = "nome, ";
            $vnome = "'" . $dados['nome'] . "', ";
        }

        $sql = "
                INSERT INTO chamados($tnome setor, sala, problema, protocolo) VALUES(
                    $vnome
                    '" . $dados['setor'] . "', 
                    '" . $dados['sala'] . "', 
                    '" . $dados['problema'] . "', 
                    '" . $dados['protocolo'] . "'
                );
            ";

            conn($sql);
    }

    public function listarTodos(){
        $sql = "SELECT * FROM chamados;";

        $dados = conn($sql);

        return $dados;
    }

    public function procurar(int $id){
        $sql = "SELECT * FROM chamados WHERE id = " . $id . ";";

        $dados = conn($sql);

        return $dados;
    }

    public function remover(int $id){
        $sql = "DELETE FROM estrutura WHERE id = " . $id . ";";

        $dados = conn($sql);

        return $dados;
    }

    public function resposta(array $dados){
        $sql = "UPDATE chamados SET andamento = 2, resposta = " . $dados['resposta']
                . "WHERE id = " . $dados['id'] . ";";

        return conn($sql);
    }

    public function termina(array $dados){
        $sql = "UPDATE chamados SET andamento = 3, resposta = " . $dados['resposta']
                . "WHERE id = " . $dados['id'] . ";";

        return conn($sql);
    }


}