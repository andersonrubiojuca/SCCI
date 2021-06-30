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
            <label>Resposta</label>
            <textarea name="resposta" id="resposta" rows="1" cols="50" class="form-control" disabled><?= $ouvidoria->getRetorno()?></textarea>
                <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                        Sair
                    </button>
            </div>
        </div>
    </div>
            </div>
        </section>
    </body>
</html>