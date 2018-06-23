<!DOCTYPE html>
<html>
    <head>
        <title>Alteração</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php
            $dados = $_POST;
            $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
            $terminar;
            
            if($dados['action'] == 'Enviar'){
                $result = mysqli_query($conn, "UPDATE `".$dados['tipo']."` SET `andamento` = '2', `retorno` = '".$dados['resposta']."' where protocolo = '".$dados['protocolo']."'")
                        or die('Could not connect to MySQL: ' . mysqli_error($conn));
                $terminar = 'Alterado';
            } elseif ($dados['action'] == 'Terminar') {
                $result = mysqli_query($conn, "UPDATE `".$dados['tipo']."` SET `andamento` = '1', `retorno` = 'Terminado!' where protocolo = '".$dados['protocolo']."'")
                        or die('Could not connect to MySQL: ' . mysqli_error($conn));
                $terminar = 'Terminado';
        }
        ?>
    </head>
    <body>
        <style>
            .corpo{
                background: rgba(100,149,237,0.4);
            }
            body{
                position: absolute;
                font-family: 'Helvetica ', "Lucida Sans Unicode ", "Lucida Grande", sans-serif;
                /*float: left;*/
                top: 15%;
                left: 15%;
                background: #F0F8FF;

            }
        </style>
        <section class="corpo container">
            <p class="titulo"><?= $terminar ?> com sucesso!</p>
            <p style="text-align: center;"><button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                Fechar
            </button></p>
        </section>
    </body>
</html>