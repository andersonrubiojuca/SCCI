<?php

if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['login'])){
    $_SESSION = [];
    header("location:../index.php");
    exit();
}


function privilegio(int $privilegio){
    $login = $_SESSION['login'];
    if($privilegio < $login->getPrivilegio()){
        echo"<script language='javascript' type='text/javascript'>alert('Area Restrita!');</script>";
        header("location:../php/home.php");
    }
}

function getMyPriv(){
    return $_SESSION['login']->getPrivilegio();
}