<!DOCTYPE html>
<html>
    <head>
        <title>Mudar Senha</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/padrao.min.css">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <script src="../javascript/less.js" type="text/javascript"></script>
        <?php
            $login = $_GET['usuario'];
            $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
            
            $result = mysqli_query($conn, "select * from `login` where `Login`= '$login'");
            $mysql = mysqli_fetch_array($result);
        ?>
    </head>
    <body>
        <section class="formulario container">
            <p class="titulo">Mudança de Senha</p>
            <form action="senha_alterada.php" method="POST">
                <label>Login</label>
                <input type="text" class="form-control" id="login" name="login"
                       value="<?= $mysql['Login']?>" readonly>
                <label>Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" value="********" readonly>
                <label>Nova Senha</label>
                <input type="password" class="form-control" id="novasenha" name="novasenha" required>
                <label>Digite a Nova Senha Novamente</label>
                <input type="password" class="form-control" id="senhanovamente" name="senhanovamente" required>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-default navbar-btn" value="Enviar">
                    </div>
                    <div class="col-lg-3">
                        <input type="reset" class="btn btn-default navbar-btn" value="Limpar">
                    </div>
                    <div class="col-lg-3">
                        <input type="button" class="btn btn-default navbar-btn" value="Sair" onclick="window.close();">
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>