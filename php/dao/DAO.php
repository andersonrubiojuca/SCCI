<?php
include_once("../database.php");
require_once("DAO.php");

abstract class DAO{
    private $banco;

    public function __construct(){
        $this->banco = Database::$db;
    }
    
    protected function conn(String $sql){
        $conn = mysqli_connect($this->banco['endereco'], $this->banco['login'], $this->banco['senha'], $this->banco['banco']);
        $result = mysqli_query($conn,$sql) or die('Could not connect to MySQL: ' . mysqli_error($conn));

        $dados = [];

        if(!is_bool($result)){
            while($row = mysqli_fetch_assoc($result)){
                $dados[] = $row;
            }
        }

        return $dados;
    }
}