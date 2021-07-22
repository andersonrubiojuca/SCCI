<?php
$cabecalho_title = "Ver Contas";
include 'cabecalho-login.php';

require_once('dao/loginDAO.php');
    privilegio(1);

    //retorna o privilegio (que esta em numero) em Palavras
    function privIntToStr($priv){
        if($priv == 1){
            return 'Administrador';
        } elseif($priv == 2){
            return 'Gerente';
        } else {
            return 'Usuário';
        }
    }

    $loginDAo = new LoginDAO();
    $dados = $loginDAo->listarTodos();
    // melhor deixar a conta admin por fora da lista
    array_shift($dados);

?>
<section class="container contas">
    <h2>Configuração de Contas</h2>
    <?php
        if($dados == null):
    ?>
        <p><b>Nenhuma Conta!</b></p>
    <?php
        else:
    ?>
        <table>
            <tr>
                <td>Nome</td>
                <td>Login</td>
                <td>Privilegio</td>
                <td>Nova Senha</td>
                <td>Alterar Privilégio</td>
                <td>Excluir</td>
            </tr>
        
    
    <?php
        foreach($dados as $dado):
    ?>   

        <tr>
        <td><?= $dado->getNome() ?></td>
        <td><?= $dado->getUsuario() ?></td>
        <td><?=  privIntToStr($dado->getPrivilegio()) ?></td>
        <td><a href="#" onclick="window.open('../contas/alt_senha.php?usuario=<?= $dado->getUsuario() ?>', 'Senha', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400')">Senha</a></td>
        <td><a href="../contas/alt_privilegio.php?usuario=<?= $dado->getUsuario() ?>" >Privilégio</a></td>
        <td><button type="button" onclick="excluir('<?= $dado->getUsuario() ?>')"><span class="glyphicon glyphicon-ban-circle"></span></button></td>
        </tr><br>
    
        <?php
        endforeach; 
        endif;
    ?>
    </table>

    <form method="POST" action="../contas/criar.php" target="Criar" onsubmit="window.open('', 'Criar', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=1,width=800,height=400');">
        <input type="hidden" name="privilegio" id="privilegio" value="<?= getMyPriv()?>">
        <button type="submit" class="btn btn-default navbar-btn">
                Criar Conta</button>
    </form>
            <script>
            //<!-- hide on

            function popup(popupfile,winheight,winwidth)
            {
            open(popupfile,"PopupWindow","resizable=no,height=" + winheight + ",width=" + winwidth + ",scrollbars=no");
            }

            // hide off -->
            
            function excluir(s){
                if (window.confirm("Você realmente quer excluir?")) { 
                  window.location.href = "../contas/excluir.php?usuario=" + s;
                }
            }
        </script>
</section>
<?php
include_once '../php/rodape-adm.php';