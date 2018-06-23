<!DOCTYPE html>
<html>
    <head>
        <title>Feito</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/padrao.min.css">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <script src="../javascript/less.js" type="text/javascript"></script>
        <?php
           include 'autenticacao.php'; 
            
        ?>
    </head>
    <body>
        <section class="corpo container">
            <p class="titulo">Conta Criada com sucesso!</p>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                        Sair
                    </button>
                </div>
            </div>
        </section>
    </body>
</html>