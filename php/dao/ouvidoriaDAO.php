<?php
    include_once("../database.php");
    require_once("DAO.php");

class OuvidoriaDAO extends DAO{
    
    private function getOuvidoria(array $dados){
        $ouvi = new Ouvidoria();
        $ouvi($dados);

        return $ouvi;
    }

    //mecher
    public function adicionaOuvidoria(Ouvidoria $dados){
        $tnome = "";
        $vnome = "";

        $temail = "";
        $vemail = "";

        if($dados->getNome()){
            $tnome = "nome, ";
            $vnome = "'" . $dados->getNome() . "', ";
        }
        if($dados->getEmail()){
            $temail = "email, ";
            $vemail = "'" . $dados->getEmail() . "', ";
        }

        $sql = "
                INSERT INTO ouvidora($tnome $temail conteudo, protocolo) VALUES(
                    $vnome
                    $vemail
                    '" . $dados->getConteudo() . "', 
                    '" . $dados->getProtocolo() . "'
                );
            ";

        $this->conn($sql);
    }

    public function listarTodos(){
        $sql = "SELECT * FROM ouvidoria;";

        $dados = $this->conn($sql);

        foreach($dados as &$dado){
            $dado = $this->getOuvidoria($dado);
        }

        return $dados;
    }

    public function procurar(int $id){
        $sql = "SELECT * FROM ouvidoria WHERE id = " . $id . ";";

        $dados = $this->conn($sql);

        if(!isset($dados)){
            $estrutura = $this->getOuvidoria($dados);
            return $estrutura;
        }
    }

    public function procurarProtocolo(String $prot){
        $sql = "SELECT * FROM ouvidoria WHERE protocolo = '$prot';";

        $dados = $this->conn($sql);

        if($dados > 0){
            return $dados;
        }
    }

    public function remover(int $id){
        $sql = "DELETE FROM ouvidoria WHERE id = " . $id . ";";

        $dados = $this->conn($sql);
    }

    public function resposta(Estrutura $dados){
        $sql = "UPDATE ouvidoria SET andamento = 2, resposta = '" . $dados->getRetorno()
                . "' WHERE id = " . $dados->getId() . ";";

        return $this->conn($sql);
    }

    public function termina(Estrutura $dados){
        $sql = "UPDATE ouvidoria SET andamento = 3, resposta = " . $dados->getRetorno()
                . "WHERE id = " . $dados->getId() . ";";

        return $this->conn($sql);
    }


}