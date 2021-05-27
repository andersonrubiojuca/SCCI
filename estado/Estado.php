
        <?php
        require_once("../php/dao/protocoloDAO.php");
        require_once("../php/model/estrutura.php");

        $protocolo = $_GET['protocolo'];
        
        $estrudao = new protocoloDAO();

        $dados = $estrudao->procuraProt($protocolo);

        var_dump($dados);

        if(isset($dados[0]['problema'])){
            echo "é um chamado <br>";
            echo $dados[0]['problema'];
        } 
        elseif (isset($dados['conteudo'])){
            echo "é uma ouvidoria <br>";
            echo $dados[0]['conteudo'] . "aa";
        } 
        else {
            echo "erro 404";
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