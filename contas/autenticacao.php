<?php

$dados = $_POST;
            
        $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
//        
        $resultlogin = mysqli_query($conn, "select * from `login` where `Login`= '$dados[login]'");
        $mysqllogin = mysqli_fetch_array($resultlogin);
        if($dados['nome'] == ""){
                echo "<script>alert('Erro: Local não permitido')</script>";
                echo "<script>javascript:history.back(-1)</script>";
        }elseif($dados['login'] == $mysqllogin["Login"]){
            echo "<script>alert('Login já existe, use um diferente!')</script>";
            echo "<script>javascript:history.back(-1)</script>";     
        }   elseif($dados['senha'] != $dados['senhanovamente']){
            echo "<script>alert('Senhas diferentes, revise-as!')</script>";
            echo "<script>javascript:history.back(-1)</script>";        
        }else {
            $result = mysqli_query($conn, "insert into `login`(`Nome`,`Login`,`Senha`,`privilegio`)values('$dados[nome]', '$dados[login]', '$dados[senha]','$dados[privilegio]')") or die('Could not connect to MySQL: ' . mysqli_error($conn));
        }