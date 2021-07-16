<?php
    require_once('../php/model/estrutura.php');
    require_once('../php/dao/estruturaDAO.php');

    $cabecalho_title="Ver estrutura";
    include '../php/cabecalho-login.php';
    privilegio(2);

    $estruDAO = new EstruturaDAO();

    $dados = $estruDAO->andamento($_GET['tipo']);
    
?>
<section class="verificar container">
    <h2>Lista de problemas de estrutura:</h2>
    <p></p>
    
    <a href="ver-estrutura.php?tipo=3"><button type="button" class="btn btn-default navbar-btn">
        Não Resolvidos
        </button></a>
    <a href="ver-estrutura.php?tipo=2"><button type="button" class="btn btn-default navbar-btn">
        Em andamento
        </button></a>
    <a href="ver-estrutura.php?tipo=1"><button type="button" class="btn btn-default navbar-btn">
        Terminados
        </button></a>
    <?php
    if($dados == NULL):
    ?>
        <p><b>Nenhum item aqui!</b></p>
    <?php
    
    else:
    ?>
        <table>
            <tr>
                <td>Nome</td>
                <td>Problema</td>
                <td>Protocolo</td>
                <td>Responder</td>
            </tr>
    
    <?php       
     
        foreach($dados as $dado):
    ?>
            <tr>
                <td><?= $dado->getNome() ?></td>
                <td><?= $dado->getProblema() ?></td>
                <td><?= $dado->getProtocolo() ?></td>
                <td>
                    <a href="#" onClick="window.open('Estado.php?protocolo=<?= $dado->getProtocolo() ?>', 'Estado', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400')"><button type="button"><span class="glyphicon glyphicon-edit"></span></button></a>
                </td>
            </tr>
    <?php 
    endforeach; 
    endif;
    ?>
    </table>

    <br>
    
</section>
<?php

include_once '../php/rodape-adm.php';