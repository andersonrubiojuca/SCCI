<?php
$cabecalho_title = "Privilegio Alterado";
include '../php/cabecalho-login.php';
$dados = $_SESSION;
$form = $_POST;

    $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
    
    
    if($dados['privilegio'] > 1|| !$dados){
        echo"<script>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
                                  exit();
    }
    $result = mysqli_query($conn, "update `login` set `privilegio` = $form[privilegio] where `Login` = '$form[login]'") or die('Could not connect to MySQL: ' . mysqli_error($conn));
    ?>
    <section class="container">
            <p class="titulo">Privilégio Alterado com Sucesso!</p>
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <a href="../php/conf-contas.php"><button type="button" class="btn btn-default navbar-btn">
                        Voltar
                        </button></a>
                </div>
            </div>
        </section>
<?php
mysqli_close($conn);
include '../php/Rodape.php';