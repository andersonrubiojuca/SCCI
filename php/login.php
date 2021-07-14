<?php
require_once('model/login.php');
require_once('dao/loginDAO.php');

$dados = $_POST;
session_start();

$loginDAO = new LoginDAO();

$conta = $loginDAO->entrar($dados['login'], $dados['senha']);

if($conta){
	$_SESSION['login'] = $conta;

	header('location:../php/home.php');
} else{
        
echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
	include '../index.php';
	
}