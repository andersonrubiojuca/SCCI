<?php

require_once('../php/model/ouvidoria.php');
require_once('../php/dao/ouvidoriaDAO.php');

$protocolo = $_GET['protocolo'];

$ouvidoria = new Ouvidoria();
$ouvidoria->setProtocolo($protocolo);
$ouvidoria->setRetorno('Muito Obrigado pela sua Sugestão/Reclamação, ela foi' . 
                ' recebida e ouvida! agradecemos a sua participação!');

$ouviDao = new OuvidoriaDAO();

$ouviDao->resposta($ouvidoria, 1);

header('location:ver-ouvidoria.php?tipo=3');