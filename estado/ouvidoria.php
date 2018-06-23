<!DOCTYPE html>
<html>
    <head>
        <title>Estrutura</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
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
            <label>Resposta</label>
            <textarea name="resposta" id="resposta" rows="1" cols="50" class="form-control" disabled><?= $estrutura["retorno"]?></textarea>
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