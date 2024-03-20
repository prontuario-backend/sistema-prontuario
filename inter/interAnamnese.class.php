<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/anamnese.class.php';
include './inter/dados.interface.php';
include './inter/interPai.class.php';

//intermediario da classe anamnese

class  InterAnamnese{
    private mysqli $conn;
public function create(){

}
public function read(){

}
public function update(){

}
public function delete(){

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
}