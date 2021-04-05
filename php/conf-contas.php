<?php
$cabecalho_title = "Ver Contas";
include 'cabecalho-login.php';
$dados = $_SESSION;

    $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
    
    
    if($dados['privilegio'] > 1|| !$dados){
        echo"<script>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
                                  exit();
    }
    $result = mysqli_query($conn, "SELECT * FROM `login`");
    $sql = mysqli_fetch_array($result);
    
    function privilegio($priv){
        if($priv == 1){
            return 'Administrador';
        } elseif($priv == 2){
            return 'Gerente';
        } else {
            return 'Usuário';
        }
    }
?>
<section class="container contas">
    <h2>Configuração de Contas</h2>
    <?php
    if($sql == NULL) {
        echo '<p><b>Nenhuma conta!</b></p>';
    } else {
        echo '<table>
        <tr>
            <td>Nome</td>
            <td>Login</td>
            <td>Privilegio</td>
            <td>Nova Senha</td>
            <td>Alterar Privilégio</td>
            <td>Excluir</td>
        </tr>';
        
    
           
    while ($sql = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>' . $sql['Nome'] . '</td>';
        echo '<td>' . $sql['Login'] . '</td>';
        echo '<td>' . privilegio($sql['privilegio']) . '</td>';
        echo '<td><a href="../contas/alt_senha.php?usuario='.$sql['Login'].'" target="_blank">Senha</a></td>';
        echo '<td><a href="../contas/alt_privilegio.php?usuario='.$sql['Login'].'" >Privilégio</a></td>';
        echo '<td><button type="button" onclick="excluir('; echo "'$sql[Login]'";echo ')"><span class="glyphicon glyphicon-ban-circle"></span></button></td>';
        echo '</tr><br>';
    }
    
    echo '</table>';
    }
    mysqli_close($conn);
    ?>
    <form method="POST" action="../contas/criar.php" target="Criar" onsubmit="window.open('', 'Criar', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=1,width=800,height=400');">
        <input type="hidden" name="privilegio" id="privilegio" value="<?= $dados['privilegio']?>">
        <button type="submit" class="btn btn-default navbar-btn">
                Criar Conta</button>
    </form>
            <script>
            <!-- hide on

            function popup(popupfile,winheight,winwidth)
            {
            open(popupfile,"PopupWindow","resizable=no,height=" + winheight + ",width=" + winwidth + ",scrollbars=no");
            }

            // hide off -->
            
            function excluir(s){
                if (window.confirm("Você realmente quer excluir?")) { 
                  window.open("../contas/excluir.php?usuario=" + s);
                }
            }
        </script>
</section>
<?php
include_once '../php/rodape-adm.php';