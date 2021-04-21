<?php
    include_once("../database.php");

class EstruturaDAO{

    private $banco;

    public function __construct(){
        $this->banco = Database::$db;
    }

    private function conn(String $sql){
        $conn = mysqli_connect($this->banco['endereco'], $this->banco['login'], $this->banco['senha'], $this->banco['banco']);
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

        $this->conn($sql);
    }

    public function listarTodos(){
        $sql = "SELECT * FROM chamados;";

        $dados = $this->conn($sql);

        return $dados;
    }

    public function procurar(int $id){
        $sql = "SELECT * FROM chamados WHERE id = " . $id . ";";

        $dados = $this->conn($sql);

        return $dados;
    }

    public function procurarProtocolo(int $prot){
        $sql = "SELECT * FROM chamados WHERE protocolo = " . $prot . ";";

        $dados = $this->conn($sql);

        return $dados;
    }

    public function remover(int $id){
        $sql = "DELETE FROM estrutura WHERE id = " . $id . ";";

        $dados = $this->conn($sql);

        return $dados;
    }

    public function resposta(array $dados){
        $sql = "UPDATE chamados SET andamento = 2, resposta = " . $dados['resposta']
                . "WHERE id = " . $dados['id'] . ";";

        return $this->conn($sql);
    }

    public function termina(array $dados){
        $sql = "UPDATE chamados SET andamento = 3, resposta = " . $dados['resposta']
                . "WHERE id = " . $dados['id'] . ";";

        return $this->conn($sql);
    }


}