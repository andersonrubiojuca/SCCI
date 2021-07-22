<?php
    $cabecalho_title = "Excluido";
    include '../php/cabecalho-login.php';
    require_once('../php/model/login.php');
    require_once('../php/dao/loginDAO.php');

    privilegio(1);

    $loginDAO = new LoginDAO();
    $login = $loginDAO->jaExiste($_GET['usuario']);

    if($login){
        $loginDAO->remover($login->getId());
    }
    
?>
<section class="container">
            <p class="titulo">Conta excluída com Sucesso! <?= $login->getUsuario() ?></p>
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
include '../php/Rodape.php';