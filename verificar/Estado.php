
        <?php

        $protocolo = $_GET['protocolo'];
        
        
        
        $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
        
        $autenticacao = substr((string)$protocolo,0,1);
        
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