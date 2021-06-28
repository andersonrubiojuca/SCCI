
        <?php
        require_once("../php/dao/protocoloDAO.php");
        require_once("../php/model/estrutura.php");

        $protocolo = $_GET['protocolo'];
        
        $protDAO = new protocoloDAO();

        $dados = $protDAO->procuraProt($protocolo);

        if(isset($dados[0]['problema'])){
            include_once('estrutura.php');
        } 
        elseif (isset($dados[0]['conteudo'])){
            include_once('ouvidoria.php');
        } 
        else {
            echo"<script language='javascript' type='text/javascript'>alert('protocolo incorreto!');window.close();</script>";
        }
        
        /*
        if($autenticacao == 1){
            $sql = mysqli_query($conn, "SELECT * FROM `estrutura` WHERE `protocolo` = '" . $protocolo . "'");
            if ($sql){
                include 'estrutura.php';
            }
            else {
                 echo"<script language='javascript' type='text/javascript'>alert('protocolo incorreto!');window.close();</script>";
            }
        } elseif ($autenticacao == 2) {
            $sql = mysqli_query($conn, "SELECT * FROM `ouvidoria` WHERE `protocolo` = '" . $protocolo . "'");
            if ($sql){
                include 'ouvidoria.php';
            }
            else {
                 echo"<script language='javascript' type='text/javascript'>alert('protocolo incorreto!');window.close();</script>";
            }
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('protocolo incorreto!');window.close();</script>";
        }
        */