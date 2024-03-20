<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/enfermeiro.php';
/*
esta classe responsavel por fazer o crud dos dados de um enfermeiro os valida e salva-los no banco de dados.
*/
//intermediario da classe enferemeiro

class InterEnf {

    private mysqli $conn;
    public function __construct(){
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    
    // public function create($nome, $coren, $senha){

    // }
    // public function read($nome, $coren, $senha){
    
    // }
    // public function updateNome($nome){
    
    // }
    // public function updateCoren($coren){

    // }
    // public function updateSenha(){

    // }
    public function delete($nome, $coren, $senha){
    
    }



    public function fazerLogin($nome, $coren, $senha)
    {
        // Lógica para fazer login
    }

    public function alterarSenha($novaSenha, $senhaAntiga)
    {
        // Lógica para alterar senha
    }

    public function alterarNome($novoNome)
    {
        // Lógica para alterar nome
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