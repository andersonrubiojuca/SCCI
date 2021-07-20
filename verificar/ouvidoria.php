<!DOCTYPE html>
<html>
    <head>
        <title>Ouvidoria</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet" type="text/css"/> 
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php
            $ouvidoria = $dados;

            if($ouvidoria->getNome() == null)
                $ouvidoria->setNome("Anônimo");
            if($ouvidoria->getEmail() == null)
                $ouvidoria->setEmail("anônimo@anonimo.com");
            if($ouvidoria->getRetorno() == null)
                $ouvidoria->setRetorno("Aguarde o Retorno.");
        
        ?>
    </head>
    <body>
        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" 
                        name="nome" value="<?= $ouvidoria->getNome()?>" disabled>
                    <label>E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $ouvidoria->getEmail()?>" disabled>
                    <label>Sugestão/Reclamação</label>
                    <textarea name="conteudo" id="conteudo" rows="4" cols="50" class="form-control" disabled><?= $ouvidoria->getConteudo()?></textarea>
                    <form action="alteracao.php" method="POST">
                    <label>Resposta</label>
                    <textarea name="resposta" id="conteudo" rows="1" cols="50" class="form-control"><?= $ouvidoria->getRetorno()?></textarea>
                        <div class="row">
                                    <div class="col-lg-3 col-sm-3"></div>
                                    <div class="col-lg-2 col-sm-2">
                                        <input type="submit" id="Responder" value="Responder" name="action" class="btn btn-default navbar-btn">
                                    </div>
                                    <div class="col-lg-2 col-sm-2">
                                        <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                                            Fechar
                                        </button>
                                        <input type="hidden" id="protocolo" name="protocolo" value="<?= $protocolo?>">
                                        <input type="hidden" id="tipo" name="tipo" value="ouvidoria">
                                    </div>
                                    <div class="col-lg-2 col-sm-2">
                                        <input type="submit" value="Terminar" name="action" id="Terminar" class="btn btn-default navbar-btn">
                                    </div>
                                </div>
                    </form>
            </div>
            </div>
        </section>
    </body>
</html>