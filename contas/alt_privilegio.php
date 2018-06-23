<?php
$cabecalho_title = "Alteração de Privilégio";
include '../php/cabecalho-login.php';
$dados = $_SESSION;
$priv = $_GET['usuario'];

    $conn = mysqli_connect("127.0.0.1", "root", "", "feedback");
    
    if($dados['privilegio'] > 1|| !$dados){
        echo"<script language='javascript' type='text/javascript'>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
                                  exit();
    }
    $result = mysqli_query($conn, "SELECT * FROM `login` where `Login`= '$priv'");
    $sql = mysqli_fetch_array($result);
    
    $administrador = "";
    $gerente = "";
    $usuario = "";
    
    if($sql['privilegio'] == 1){
        $administrador = "checked";
    } elseif($sql['privilegio'] == 2){
        $gerente = "checked";
    } elseif($sql['privilegio'] == 3){
        $usuario = "checked";
    } else
    
?>
    <section class="container">
        <div class="row">
        <p class="titulo">Alterar o privilégio do usuário: <?= $sql['Nome']?></p><br>
            <form action="privilegio_alterado.php" method="POST">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Administrador</label>
                                <br><label>Gerente</label>
                                <br><label>Usuario</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="1" <?= $administrador?>>
                                <br><input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="2" <?= $gerente?>>
                                <br><input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="3" <?= $usuario?>>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3">
                            <input type="hidden" id="login" name="login" value="<?= $_GET['usuario']?>">
                            <input type="submit" class="btn btn-default navbar-btn" value="Salvar">
                        </div>
                        <div class="col-lg-3">
                            <a href="../php/conf-contas.php"><input type="button" class="btn btn-default navbar-btn" value="Voltar"></a>
                        </div>
                    </div>
                </form>            
        </div>
    </section>
<?php
mysqli_close($conn);
include '../php/Rodape.php';