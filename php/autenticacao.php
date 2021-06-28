<?php

include_once("utils/uuid.php");
include_once("dao/estruturaDAO.php");
require_once("dao/ouvidoriaDAO.php");
include_once("model/estrutura.php");
require_once("model/ouvidoria.php");

$dados = $_POST;

$protocolo = UUID::gen_uuid();

$dados += ["protocolo" => $protocolo];


if($dados['tipo'] == 'estrutura'){
    $estrutura = new Estrutura();
    $estrutura($dados);

    $dao = new EstruturaDAO();
    $dao->adicionaEstrutura($estrutura);
} elseif ($dados['tipo'] == 'ouvidoria') {
    $ouvidoria = new Ouvidoria();
    $ouvidoria($dados);

    $dao = new OuvidoriaDAO();
    $dao->adicionaOuvidoria($ouvidoria);
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Erro: voltando ao início!');window.location.href='../index.php';</script>";
    include '../index.php';
}
                