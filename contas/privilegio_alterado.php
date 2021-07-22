<?php
$cabecalho_title = "Privilegio Alterado";
include '../php/cabecalho-login.php';
require_once('../php/model/login.php');
require_once('../php/dao/loginDAO.php');

privilegio(1);

$form = $_POST;

    $login = new Login();
    $login->setUsuario($form['usuario']);
    $login->setPrivilegio($form['privilegio']);
    
    $loginDAO = new LoginDAO();
    $loginDAO->mudaPrivilegio($login);
    
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
include '../php/Rodape.php';