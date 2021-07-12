<?php
    include_once("../database.php");
    require_once("DAO.php");

class loginDAO extends DAO {

    private function getLogin(array $dados){
        $login = new Login();
        $login($dados);
        
        return $login;
    }

    public function entrar(String $login, string $senha){
        $sql = "SELECT * FROM login where login= '$login';";
        
        $dados = $this->conn($sql);

        if(array_key_exists(0, $dados)){
            $conta = $this->getLogin($dados[0]);
            if(strcmp($conta->getSenha(), $senha)){
                return $conta;
            }
        }
    }

    public function registrar(Login $login){
        $sql = "INSERT INTO login(nome, login, senha, privilegio) VALUES(
            '" . $login->getNome() ; "',
            '" . $login->getLogin() ; "',
            '" . $login->getSenha() ; "',
            '" . $login->getPrivilegio() ; "',
        );";
        
        $this->conn($sql);
    }

    public function listarTodos(){
        $sql = "SELECT * FROM login;";

        $dados = $this->conn($sql);

        foreach($dados as &$dado){
            $dado = $this->getLogin($dado);
        }

        return $dados;
    }

    public function procurar(int $id){
        $sql = "SELECT * FROM login WHERE id = " . $id . ";";

        $dados = $this->conn($sql);

        if(array_key_exists(0, $dados))
            return $this->getLogin($dados[0]);
    }

    public function remover(int $id){
        $sql = "DELETE FROM login WHERE id = " . $id . ";";

        $dados = $this->conn($sql);
    }

    public function mudaPrivilegio(int $privilegio, Login $login){
        $sql = "UPDATE login SET privilegio = $privilegio WHERE id = " . $login->getId() . ";";

        return $this->conn($sql);
    }

}