<!DOCTYPE html>
<html>
    <head>
        <title>Alterado com Sucesso!</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/padrao.min.css">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <script src="../javascript/less.js" type="text/javascript"></script>
        <?php
            require_once('../php/model/login.php');
            require_once('../php/dao/loginDAO.php');

            $dados = $_POST;
            $login = new Login();
            $login($dados);
            $login->setSenha($dados['novasenha']);

            $loginDAO = new LoginDAO();
            if($dados['novasenha'] != $dados['senhanovamente']){
                echo "<script>alert('Senhas diferentes, revise-as!')
                    javascript:history.back(-1)</script>"; 
            } else{
                $loginDAO->mudaSenha($login);
            }
        ?>
    </head>
    <body>
        <section class="corpo container">
            <p class="titulo">Alterado com Sucesso!</p>
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-default navbar-btn" onclick="window.close();">
                        Sair
                    </button>
                </div>
            </div>
        </section>
    </body>