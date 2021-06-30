<?php
require_once('estruturaDAO.php');
require_once('ouvidoriaDAO.php');

class ProtocoloDAO{

    public function procuraProt(String $prot){
        $estrutura = new EstruturaDAO();
        $dados = $estrutura->procurarProtocolo($prot);
        
        if(is_a($dados, "Estrutura")){
            return $dados;
        }
        
        $ouvidoria = new OuvidoriaDAO();
        $dados = $ouvidoria->procurarProtocolo($prot);
        
        if(is_a($dados, "Ouvidoria"))
            return $dados;
    }
}