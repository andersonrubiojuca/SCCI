<?php 
$dados = $_POST;
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "feedback") or die ("Sem conexão com o servidor");

$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `Login` = '$dados[login]' AND `Senha`= '$dados[senha]'");
$sql = mysqli_fetch_array($result);
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $dados['login'];
$_SESSION['senha'] = $dados['senha'];
$_SESSION['privilegio'] = $sql['privilegio'];
header('location:../php/home.php');
}
else{
        
	echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
        include '../index.php';
        
	}

?>