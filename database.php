<?php

class Database{
/**
 * variavel utilizada em todo o projeto para a conexão com o banco de dados
 * é bom mudar essa array para poder conectar com o bd
 */
    static $db = [
        "endereco" => "127.0.0.1",
        "login" => "root",
        "senha" => "",
        "banco" => "feedback"
    ];
}