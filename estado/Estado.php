
        <?php
        require_once("../php/dao/estruturaDAO.php");
        require_once("../php/model/estrutura.php");

        $protocolo = $_GET['protocolo'];
        
        $estrudao = new EstruturaDAO();

        $dados = $estrudao->procurarProtocolo($protocolo);

        if($dados){
            echo "tem sim <br>";
            $oi = mysqli_fetch_array($dados);
            echo $oi["sala"];
        } else{
            echo "tem nao";
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