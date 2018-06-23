<?php
$cabecalho_title="Ver estrutura";
include '../php/cabecalho-login.php';

$dados = $_SESSION;
$tipo = $_GET['tipo'];

    $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
    
    if($dados['privilegio'] > 2|| !$dados){
        echo"<script language='javascript' type='text/javascript'>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
                                  exit();
    }
    
    $sqlp = mysqli_query($conn, "SELECT * FROM `estrutura` WHERE `andamento` = ".$tipo);
    $sql = mysqli_fetch_array($sqlp);
    
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
    if($sql == NULL) {
        echo '<p><b>Nenhum item aqui!</b></p>';
    } else {
        echo '<table>
        <tr>
            <td>Nome</td>
            <td>Problema</td>
            <td>Protocolo</td>
            <td>Responder</td>
        </tr>';
        
        echo '<tr>';
        echo '<td>' . $sql['nome'] . '</td>';
        echo '<td>' . $sql['problema'] . '</td>';
        echo '<td>' . $sql['protocolo'] . '</td>';
        echo '<td><a href="Estado.php?protocolo='.$sql['protocolo'].'" target="_blank"><button type="button"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
        echo '</tr>';
    
           
    while ($sql = mysqli_fetch_array($sqlp)){
        echo '<tr>';
        echo '<td>' . $sql['nome'] . '</td>';
        echo '<td>' . $sql['problema'] . '</td>';
        echo '<td>' . $sql['protocolo'] . '</td>';
        echo '<td><a href="Estado.php?protocolo='.$sql['protocolo'].'" target="_blank"><button type="button"><span class="glyphicon glyphicon-edit"></span></button></a></td>';
        echo '</tr>';
    }
    
    echo '</table>';
    }
    mysqli_close($conn)
    ?>
    <p></p>
    
</section>
<?php
include '../php/Rodape.php';