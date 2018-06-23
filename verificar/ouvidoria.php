<!DOCTYPE html>
<html>
    <head>
        <title>Estrutura</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php
            $estrutura = mysqli_fetch_array($sql);?>
    </head>
    <body>
        <section class="container">
            <div class="row">
        <div class="col-lg-12">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" 
                   name="nome" value="<?= $estrutura["nome"]?>" disabled>
            <label>E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $estrutura["email"]?>" disabled>
            <label>Telefone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="<?= $estrutura["telefone"]?>" disabled>
            <div class="row">
                <div class="col-lg-11">
                    <label>Curso</label>
                    <select class="form-control" name="curso" disabled>
                        <option><?= $estrutura["curso"]?></option>
                    </select>
                </div>
                <div class="col-lg-1">
                    <label>Período</label>
                    <input type="text" class="form-control" id="periodo"
                           name="periodo" value="<?= $estrutura["periodo"]?>" disabled>
                </div>
            </div>
            <label>Sugestão/Reclamação</label>
            <textarea name="conteudo" id="conteudo" rows="4" cols="50" class="form-control" disabled><?= $estrutura["conteudo"]?></textarea>
            <form action="alteracao.php" method="POST">
            <label>Resposta</label>
            <textarea name="resposta" id="conteudo" rows="1" cols="50" class="form-control"><?= $estrutura["retorno"]?></textarea>
                <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                                <input type="submit" id="Enviar" value="Enviar" name="action" class="btn btn-default navbar-btn">
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                                    Fechar
                                </button>
                                <input type="hidden" id="protocolo" name="protocolo" value="<?= $protocolo?>">
                                <input type="hidden" id="tipo" name="tipo" value="ouvidoria">
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" value="Terminar" name="action" id="Terminar" class="btn btn-default navbar-btn">
                            </div>
                        </div>
            </form>
    </div>
                
            </div>
        </section>
    </body>
</html>