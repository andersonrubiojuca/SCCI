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
            $estrutura = $dados;
            
            if($estrutura->getNome() == null)
                $estrutura->setNome("Anônimo");
                       
        ?>  
        
    </head>
    <body>
        <section class="container">
        <div class="row">
            <div class="col-lg-12">
            <fieldset>
                    <legend><b>Qual foi o problema:</b></legend>
                    <label for="nome">Nome <span style="color: red; font-size: 70%;">(opcional)</span></label>
                    <input type="text" class="form-control" id="nome" value="<?= $estrutura->getNome() ?>"
                           disabled name="nome">
                    <label for="setor">Setor</label>
                    <select name="setor" id="setor" class="form-control" disabled>
                        <option><?= $estrutura->getLocal() ?></option>
                    </select>
                    <label for="sala">Em qual sala*</label>
                    <input type="text" class="form-control" name="sala" id="sala" value="<?= $estrutura->getSala() ?>" disabled>
                    <label for="problema">Diga-nos qual o problema*</label>
                        <textarea name="problema" id="problema" class="form-control" cols="30" rows="8" 
                        disabled><?= $estrutura->getProblema() ?></textarea>
                </fieldset>
                <form action="alteracao.php" method="POST">
                    <label for="resposta">Resposta</label>
                    <textarea name="resposta" id="conteudo" rows="1" cols="50" class="form-control"><?=$estrutura->getRetorno()?></textarea>
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
                            <input type="hidden" id="tipo" name="tipo" value="estrutura">
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