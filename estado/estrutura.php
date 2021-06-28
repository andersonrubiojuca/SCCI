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
            $estrutura = $dados[0];
            
            if(!isset($estrutura['nome']))
                $estrutura['nome'] = "Anônimo";
            
            if(!isset($estrutura['retorno']))
                $estrutura['retorno'] = "Aguarde o Retorno.";
                       
        ?>  
        
    </head>
    <body>
        <section class="container">
        <div class="row">
            <div class="col-lg-12">
            <fieldset>
                    <legend><b>Qual foi o problema:</b></legend>
                    <label for="nome">Nome <span style="color: red; font-size: 70%;">(opcional)</span></label>
                    <input type="text" class="form-control" id="nome" value="<?= $estrutura['nome'] ?>"
                           disabled name="nome">
                    <label for="setor">Setor</label>
                    <select name="setor" id="setor" class="form-control" disabled>
                        <option><?= $estrutura['setor'] ?></option>
                    </select>
                    <label for="sala">Em qual sala*</label>
                    <input type="text" class="form-control" name="sala" id="sala" value="<?= $estrutura['sala'] ?>" disabled>
                    <label for="problema">Diga-nos qual o problema*</label>
                        <textarea name="problema" id="problema" class="form-control" cols="30" rows="8" 
                        disabled><?= $estrutura['problema'] ?></textarea>
                    <label>Resposta</label>
                        <textarea name="resposta" id="resposta" rows="1" cols="50" class="form-control" disabled><?= $estrutura["retorno"]?></textarea>
                    <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                        Sair
                    </button>
                </fieldset>
            </div>
        </section>
    </body>
</html>