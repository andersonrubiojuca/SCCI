<?php

trait DAO{
    private $banco;

    public function __construct(){
        $this->banco = Database::$db;
    }
    
    private function conn(String $sql){
        $conn = mysqli_connect($this->banco['endereco'], $this->banco['login'], $this->banco['senha'], $this->banco['banco']);
        return mysqli_query($conn,$sql) or die('Could not connect to MySQL: ' . mysqli_error($conn));
    }
}