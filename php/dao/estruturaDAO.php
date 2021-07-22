<?php
    require_once("DAO.php");

class EstruturaDAO extends DAO{
    

    private function getEstrutura(array $dados){
        $estru = new Estrutura();
        $estru($dados);

        return $estru;
    }

    public function adicionaEstrutura(Estrutura $dados){
        $tnome = "";
        $vnome = "";

        if($dados->getNome()){
            $tnome = "nome, ";
            $vnome = "'" . $dados->getNome() . "', ";
        }

        $sql = "
                INSERT INTO chamados($tnome setor, sala, problema, protocolo) VALUES(
                    $vnome
                    '" . $dados->getLocal() . "', 
                    '" . $dados->getSala() . "', 
                    '" . $dados->getProblema() . "', 
                    '" . $dados->getProtocolo() . "'
                );
            ";

        $this->conn($sql);
    }

    public function listarTodos(){
        $sql = "SELECT * FROM chamados;";

        $dados = $this->conn($sql);

        foreach($dados as &$dado){
            $dado = $this->getEstrutura($dado);
        }

        return $dados;
    }

    public function procurar(int $id){
        $sql = "SELECT * FROM chamados WHERE id = " . $id . ";";

        $dados = $this->conn($sql);

        if(array_key_exists(0, $dados))
            return $this->getEstrutura($dados[0]);
    }

    public function procurarProtocolo(String $prot){
        $sql = "SELECT * FROM chamados WHERE protocolo = '$prot';";

        $dados = $this->conn($sql);

        if(array_key_exists(0, $dados))
            return $this->getEstrutura($dados[0]);
    }

    public function andamento(int $tipo){
        $sql = "SELECT * FROM chamados WHERE andamento = $tipo;";

        $dados = $this->conn($sql);

        foreach($dados as &$dado){
            $dado = $this->getEstrutura($dado);
        }

        return $dados;
    }

    public function remover(int $id){
        $sql = "DELETE FROM estrutura WHERE id = " . $id . ";";

        $dados = $this->conn($sql);
    }

    public function resposta(Estrutura $dados){
        $sql = "UPDATE chamados SET andamento = 2, retorno = '" . $dados->getRetorno()
                . "' WHERE protocolo = '" . $dados->getProtocolo() . "';";

        return $this->conn($sql);
    }

    public function termina(Estrutura $dados){
        $sql = "UPDATE chamados SET andamento = 1, retorno = 'Terminado!'"
                . "WHERE protocolo = '" . $dados->getProtocolo() . "';";

        return $this->conn($sql);
    }


}