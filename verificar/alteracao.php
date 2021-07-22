<!DOCTYPE html>
<html>
    <head>
        <title>Alteração</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="../css/alteracao.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php
            require_once('../php/model/estrutura.php');
            require_once('../php/model/ouvidoria.php');
            require_once('../php/dao/estruturaDAO.php');
            require_once('../php/dao/ouvidoriaDAO.php');

            $dados = $_POST;
            $terminar;
            
            if($dados['action'] == 'Responder'){
                if($dados['tipo'] = 'estrutura'){
                    $estrutura = new Estrutura();
                    $estrutura->setRetorno($dados['resposta']);
                    $estrutura->setProtocolo($dados['protocolo']);

                    $estruDAO = new EstruturaDAO();
                    $estruDAO->resposta($estrutura);
                }
                if($dados['tipo'] = 'ouvidoria'){
                    $ouvidoria = new Ouvidoria();
                    $ouvidoria->setRetorno($dados['resposta']);
                    $ouvidoria->setProtocolo($dados['protocolo']);

                    $ouviDAO = new OuvidoriaDAO();
                    $ouviDAO->resposta($ouvidoria, 2);
                }
                $terminar = 'Alterado';
            }
            if($dados['action'] == 'Terminar'){
                if($dados['tipo'] = 'estrutura'){
                    $estrutura = new Estrutura();
                    $estrutura->setProtocolo($dados['protocolo']);

                    $estruDAO = new EstruturaDAO();
                    $estruDAO->termina($estrutura);
                }
                if($dados['tipo'] = 'ouvidoria'){
                    $ouvidoria = new Ouvidoria();
                    $ouvidoria->setRetorno($dados['resposta']);
                    $ouvidoria->setProtocolo($dados['protocolo']);

                    $ouviDAO = new OuvidoriaDAO();
                    $ouviDAO->resposta($ouvidoria, 1);
                }
                $terminar = 'Terminado';
            }
        ?>
    </head>
    <body>
        <section class="corpo container">
            <p class="titulo"><?= $terminar ?> com sucesso!</p>
            <p style="text-align: center;"><button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                Fechar
            </button></p>
        </section>
    </body>
</html>