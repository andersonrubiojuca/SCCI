<!DOCTYPE html>
<html>
    <head>
        <title>Entrar</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet" type="text/css"/> 
        <link rel="icon" type="image/ico" href="imagens/icone.ico">
        
        
        <?php
            if(isset($_SESSION['login'])){
                session_destroy();
            }
        ?>
    </head>
<body>
    <div class="fundo">
    </div>
    <header>
        <img class="fundo-img"src="imagens/door.jpg" alt="">
</header>
    <div class="container">
        <div class="row">
            <form method="POST" action="php/login.php" class="col-lg-6 col-md-6  login">
                <fieldset>
                    <legend><b>Entre com sua conta ou acesse os links abaixo.</b></legend>
                    <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" 
                               name="login" autofocus required>
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" 
                               name="senha">
                        <button type="submit"  id="entrar" name="entrar" class="btn btn-default navbar-btn entrar">
                            Entrar <span class="glyphicon glyphicon glyphicon-log-in"></span>
                            </button>
                </fieldset>
    </form>
            </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
            <a href="Form_de_Estrutura.php"><button type="button" class="btn btn-default navbar-btn infraestrutura">
            Problemas de infraestrutura clique aqui</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                <a href="Form_Ouvidoria.php"><button type="button" class="btn btn-default navbar-btn sugestoes">
            Sugestões, reclamações ou elogios clique aqui</button></a>  
            </div>
        </div>
        <div class="row">
            <form method="get" action="estado/Estado.php" target="Estado" onSubmit="window.open('', 'Estado', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=1,width=1200,height=600');">
            <div class="col-lg-6 col-md-6 ">
            
                <label for="protocolo">Protocolo:</label>
                <input type="text" class="form-control" id="protocolo" 
                       name="protocolo">
                
                <button type="submit" class="btn btn-default navbar-btn protocolo">
                    Entrar com o protocolo
                    <span class="glyphicon glyphicon glyphicon-log-in"></span>
                </button>
                </div>
            </form>
        </div>
        </div>
</body>
</html>