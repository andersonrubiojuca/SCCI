<?php
$cabecalho_title = "Alteração de Privilégio";
include '../php/cabecalho-login.php';
require_once('../php/model/login.php');
require_once('../php/dao/loginDAO.php');

privilegio(1);

    $loginDAO = new LoginDAO;
    $login = $loginDAO->jaExiste($_GET['usuario']);
    
    $administrador = "";
    $gerente = "";
    $usuario = "";
    
    if($login->getPrivilegio() == 1){
        $administrador = "checked";
    } elseif($login->getPrivilegio() == 2){
        $gerente = "checked";
    } elseif($login->getPrivilegio() == 3){
        $usuario = "checked";
    }
    
?>
    <section class="container">
        <div class="row">
        <p class="titulo">Alterar o privilégio do usuário: <?= $login->getNome()?></p><br>
            <form action="privilegio_alterado.php" method="POST">
                    <div class="col-lg-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <label>Administrador</label>
                                <br><label>Gerente</label>
                                <br><label>Usuario</label>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="1" <?= $administrador?>>
                                <br><input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="2" <?= $gerente?>>
                                <br><input type="radio" class="form-check-input" id="privilegio" name="privilegio"
                                       value="3" <?= $usuario?>>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3"></div>
                            <div class="col-lg-3 col-sm-3"">
                                <input type="hidden" id="usuario" name="usuario" value="<?= $_GET['usuario']?>">
                                <input type="submit" class="btn btn-default navbar-btn" value="Salvar">
                            </div>
                            <div class="col-lg-3 col-sm-3"">
                                <a href="../php/conf-contas.php"><input type="button" class="btn btn-default navbar-btn" value="Voltar"></a>
                            </div>
                        </div>
                    </div>
                </form>            
        </div>
    </section>
<?php
include '../php/Rodape.php';