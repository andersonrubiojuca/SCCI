<?php
require_once("DAO.php");

class ProtocoloDAO extends DAO{

    public function procuraProt(String $prot){
        $sql = "SELECT * from chamados WHERE protocolo LIKE '$prot'
                UNION ALL
                SELECT * from ouvidoria WHERE protocolo LIKE '$prot' ";

        $dados = $this->conn($sql);

        if($dados > 0){
            return $dados;
        }
    }
}