<?php
include './inter/dados.interface.php';
class InterPai implements Dados{
    private mysqli $conn;
    
    public function __construct(){
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }
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