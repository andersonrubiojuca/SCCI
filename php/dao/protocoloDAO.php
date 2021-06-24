<?php
require_once('estruturaDAO.php');
require_once('ouvidoriaDAO.php');

class ProtocoloDAO{

    public function procuraProt(String $prot){
        $estrutura = new EstruturaDAO();
        $dados = $estrutura->procurarProtocolo($prot);
        
        if(isset($dados[0]['problema'])){
            return $dados;
        }
        
        $ouvidoria = new OuvidoriaDAO();
        $dados = $ouvidoria->procurarProtocolo($prot);
        
        if(isset($dados[0]['conteudo']))
            return $dados;
    }
}