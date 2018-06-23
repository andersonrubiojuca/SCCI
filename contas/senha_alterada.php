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

            $dados = $_POST;

            $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
            
        if($dados['novasenha'] != $dados['senhanovamente']){
            echo "<script>alert('Senhas diferentes, revise-as!')</script>";
            echo "<script>javascript:history.back(-1)</script>";        
        } else {
             $result = mysqli_query($conn, "update `login` set `Senha` = '$dados[novasenha]' where `Login` = '$dados[login]'") or die('Could not connect to MySQL: ' . mysqli_error($conn));
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