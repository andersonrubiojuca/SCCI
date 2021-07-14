<!DOCTYPE html>
<html>
    <head>
        <title><?php print $cabecalho_title;?></title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/padrao.css">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php print @$cabecalho_css; 
        print @$cabecalho_algomais;
        
        require_once('model/login.php');
        include_once('middleware/session.php');
        ?>
        
    </head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
            <h1><img src="../imagens/logo.png" alt="Oswaldo Aranha"/></h1> 
            <p></p>
            </div>
            <div class="col-lg-4 col-md-4 bem-vindo">
                <p>Bem vindo <?= $_SESSION['login']->getNome() ?></p>
            </div>
            </div>
    </header>
    <section class="container">
        <div class="row">
        <nav class="menu col-lg-12">
            <ul>
                <li><a href="../php/home.php">Home</a></li>
                <li><a href="#">Lançar</a>
                    <ul>
                        <li><a href="../Form_de_Estrutura.php" target="_blank">Problema estrutural</a></li>
                        <li><a href="../Form_Ouvidoria.php" target="_blank">Ouvidoria</a></li>
                    </ul>
                </li>
                <li><a href="#">Ver</a>
                    <ul>
                    <li><a href="../verificar/ver-estrutura.php?tipo=3">Problema estrutural</a></li>
                    <li><a href="../verificar/ver-ouvidoria.php?tipo=3">Ouvidoria</a></li>
                    </ul>
                </li>
                <li><a href="#">Contas</a>
                    <ul>
                        <li><a href="../php/conf-contas.php">Ver Contas</a></li>
                    </ul>
                </li>
                <li><a href="../php/sobre.php">Sobre</a></li>
                <li><a href="../index.php">Sair da Conta</a></li>
            </ul>
        </nav>
            </div>
    </section>