<?php
require_once('../php/model/login.php');
require_once('../php/dao/loginDAO.php');

    $dados = $_POST;

    $login = new Login();
    $login($dados);

    $loginDAO = new LoginDAO();

    //verifica se não falta nenhum campo ou se as senhas nao comferem
    if($dados['nome'] == "" || $dados['senha'] == "" || $dados['senhanovamente'] == "" || 
        $dados['senha'] != $dados['senhanovamente'] || 
        $dados['privilegio'] == ""){
            echo "<script>alert('Erro: Local não permitido')
                    javascript:history.back(-1)</script>";
    } elseif ($loginDAO->jaExiste($login->getUsuario())){
        echo "<script>alert('Erro: Usuario já existe, use um diferente!')
                    javascript:history.back(-1)</script>";
    } else{
        $loginDAO->registrar($login);
    }