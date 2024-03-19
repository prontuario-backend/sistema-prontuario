<?php

class Database extends SQLite3 {
    public function __construct($arquivodb){
        $this->open($arquivodb);
    }

    public function __destruct(){
       $this->close();
    }

    public function criarTabela(){
        $criarTabela = $this->exec("CREATE TABLE IF NOT EXISTS 'enfermeiro'(
            'nome' varchar(70) NOT NULL,
            'coren' varchar(10) NOT NULL,
            'senha' varchar(255) NOT NULL
        )");

        if($criarTabela){
            echo "tabela criada com suscesso";
        }else{
            echo "erro ao criar tabela";
        }
    }
}

$dir = "database/";
if(! is_dir($dir)){
    mkdir($dir);
}
$dbfile = $dir."prontuario.db";

$conect = new Database($dbfile);

$conect->criarTabela();