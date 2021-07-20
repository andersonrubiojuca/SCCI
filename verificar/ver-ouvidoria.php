<?php
    require_once('../php/model/ouvidoria.php');
    require_once('../php/dao/ouvidoriaDAO.php');

    $cabecalho_title="Ver estrutura";
    include '../php/cabecalho-login.php';
    privilegio(2);

    $ouviDAO = new OuvidoriaDAO;

    $dados = $ouviDAO->andamento($_GET['tipo']);
    
    $max = 20;
?>
<section class="verificar container">
    <h2>Lista de Sugestões, Reclamações e elogios:</h2>
    <p></p>
    
    <a href="ver-ouvidoria.php?tipo=3"><button type="button" class="btn btn-danger navbar-btn">
        Ainda Não Ouvidos
        </button></a>
    <a href="ver-ouvidoria.php?tipo=2"><button type="button" class="btn btn-warning navbar-btn">
        Em andamento
        </button></a>
    <a href="ver-ouvidoria.php?tipo=1"><button type="button" class="btn btn-success navbar-btn">
        Ouvidos
        </button></a>
    <?php
        if($dados == null):
    ?>
        <p><b>Nenhum item aqui!</b></p>
    <?php
        else:
    ?>
        <table>
            <tr>
                <td>Nome</td>
                <td>Protocolo</td>
                <td>Conteúdo</td>
                <td>Responder</td>
                <td>Agradecimento Genérico</td>
            </tr>
           
    <?php
        foreach($dados as $dado):
    ?>
            <tr>
                <td><?= $dado->getNome() ?></td>
                <td><?= $dado->getProtocolo() ?></td>
                <td><?= substr_replace($dado->getConteudo(), (strlen($dado->getConteudo()) > $max ?'...':''), $max) ?></td>
                <td><a href="#" onClick="window.open('estado.php?protocolo=<?= $dado->getProtocolo()?>', 'Estado', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400')"><button type="button"><span class="glyphicon glyphicon-edit"></span></button></a></td>
                <td>Em Breve</td>
            </tr>
    <?php
        endforeach; 
        endif;
    ?>
    </table>
    <p></p>
    
</section>
<?php
include_once '../php/rodape-adm.php';