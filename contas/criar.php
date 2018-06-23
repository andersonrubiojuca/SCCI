<!DOCTYPE html>
<html>
    <head>
        <title>Criar</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        <?php

        $dados = $_POST;

            $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");

                if($dados['privilegio'] > 1|| !$dados){
        echo"<script language='javascript' type='text/javascript'>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
                                  exit();
    }
        ?>
    </head>
    <body>
        <section class="container formulario">
            <div class="row">
                    <p><span style="text-align: center;font-size: 24px;">Favor preêncher todos os dados para criar conta</span></p>
                    <form action="feito.php" method="POST">
                        <div class="col-sm-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" 
                               name="nome" required>
                        <label for="login">login</label>
                        <input type="text" class="form-control" id="login" 
                           name="login" required>
                        <label for="senha">senha</label>
                        <input type="password" class="form-control" id="senha"
                               name="senha" required>
                        <label for="senhanovamente">Digite a senha novamente</label>
                        <input type="password" class="form-control" id="senhanovamente"
                               name="senhanovamente" required>
                        <label for="privilegio">Privilegio:</label>
                        <p><label>Administrador</label>
                            <input type="radio" class="form-check-input" id="privilegio"
                                      name="privilegio" value="1" required>
                            <label>Gerente</label>
                            <input type="radio" class="form-check-input" id="privilegio"
                                      name="privilegio" value="2">
                            <label>Usuário</label>
                            <input type="radio" class="form-check-input" id="privilegio"
                                      name="privilegio" value="3"></p>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-2">
                            <input type="submit" name="Enviar" value="Enviar" class="btn btn-default navbar-btn">
                        </div>
                        <div class="col-sm-2">
                            <input type="reset" name="Limpar" value="Limpar" class="btn btn-default navbar-btn">
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-default navbar-btn" onclick="window.close();">Sair</button>
                        </div>
                    </form> 
                </div>
        </section>
<?php
include '../php/Rodape.php';    