<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/anamnese.class.php';


//intermediario da classe anamnese

class  InterAnamnese{
    private mysqli $conn;
public function create(){
//logica banco de dados
}
public function read(){
//logica banco de dados
}
public function update(){
//logica banco de dados
}
public function delete(){
//logica banco de dados
}
public function fecharConexao(){
    //fecha uma conexao ja iniciada
    if($this->conn == null){
        //se a conexao nao tiver sido estabelecida retorna erro
        throw new Exception('Erro, não e possivel fechar a conexão pois uma conexão ainda não foi criada.');
    }else{
        // session_destroy();
        $this->conn->close();
        unset($this->conn);
    }
}
public function getConn(){
    //retorna um objeto de conexao mysqli referente ao atributo 'conn'
    if($this->conn == null){
        //se a conexao nao tiver sido estabelecida retorna erro
        throw new Exception('Erro, não e possivel retornar o atributo $conn pois uma conexão ainda não foi criada.');
    }else{
        return $this->conn;
    }
}
}