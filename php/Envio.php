<html>
    <head>
        <title>Enviado com sucesso</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/padrao.min.css">
        
        <script src="../javascript/less.js" type="text/javascript"></script>
        <script src="../javascript/qrcodejs/qrcode.min.js" type="text/javascript"></script>
        
        <?php

             include 'autenticacao.php';
            
         ?>
    </head>
    <body>
        <section class="corpo container">
            <p class="titulo">Enviado com sucesso!</p>
            <p>Favor anotar o número de protocolo para eventuais consultas:</p>
            
            <input type="text" readonly value="<?= $protocolo?>" autofocus>
            <p>Se quiser também poderá guardar o protocolo em QR CODE</p>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div id="qrcode"></div>
                    <script type="text/javascript">
                        new QRCode(document.getElementById("qrcode"), "<?= $protocolo ?>");
                    </script>
                    </div>
                </div>
            <p><a href="../index.php"><button type="button" class="btn btn-default navbar-btn">
                Voltar
            </button></a></p>
        </section>
        
    </body>
</html>