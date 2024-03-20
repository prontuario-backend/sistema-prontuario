<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/medico.class.php';
/*
intermediario da classe medico
esta classe responsavel por fazer o crud dos dados de um medico os valida e salva-los no banco de dados.
*/
class InterMedico{

    private mysqli $conn;
    public function __construct(){
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
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