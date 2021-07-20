<?php
    require_once("../php/dao/protocoloDAO.php");
    require_once("../php/model/estrutura.php");
    require_once("../php/model/ouvidoria.php");

    $protocolo = $_GET['protocolo'];

    $protDAO = new ProtocoloDAO();

    $dados = $protDAO->procuraProt($protocolo);

    if(is_a($dados, "Estrutura")){
        include_once('estrutura.php');
    } 
    elseif(is_a($dados, "Ouvidoria")){
        include_once('ouvidoria.php');
    } 
    else {
        echo"<script language='javascript' type='text/javascript'>alert('Número do protocolo incorreto!');window.close();</script>";
    }