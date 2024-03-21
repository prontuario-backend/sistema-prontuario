<?php
/*
Esta classe realiza automaticmente uma conexao ao banco de dados ultilizando mysqli, para criar uma conexao basta criar um
objeto desta classe e a conexao sera criada automaticamente, para acessar o objeto de conexao ultilize o metodo:
getConn();

!!! IMPORTANTE: LEMBRE-SE DE FECHAR A CONEXAO QUANDO TERMINAR DE USAR SEU OBJETO CRIADO PARA EVITAR VAZEMENTO DE MEMORIA!!!
para fechar a conexao use o metodo:
fecharConexao();
*/
class Conexao{
    protected string $server = 'localhost';
    protected string $user = 'id21959013_bhdev';
    protected string $senha = '#Proz2022';
    protected string $dbname = 'id21959013_prontuariodb';
    protected mysqli $conn;// tipo de dado: objeto de conexao do mysql


    private function getServer(){
        //retorna o atributo 'server' <- referente a onde o banco de dados esta localizado
        return $this->server;
    }
    private function getUser(){
        //retorna o atributo 'user' <- referente ao usuario que acessa o banco de dados
        return $this->user;
    }
    private function getSenha(){
        //retorna o atributo 'senha' <- refernte a senha de acesso ao banco de dados
        return $this->senha;
    }
    private function getDbname(){
        //retorna o atributo 'dbname' referente ao nome da base de dados
        return $this->dbname;
    }




    private function criarConexao(){
        //inicia uma conexao ao banco de dados usando os parametros: 'user','server','senha','dbname'
        $this->conn = new mysqli(
            $this->getServer(),
            $this->getUser(),
            $this->getSenha(),
            $this->getDbname(),
        );

        //libera espaço desnessesario de variaveis que não serao mais usadas
        unset($this->server);
        unset($this->user);
        unset($this->senha);
        unset($this->dbname);

        if ($this->conn->connect_error) {
            //em caso de erro fecha a conexao e mostra o tipo de erro ocorrido
            
            die("Erro na conexão: " . $this->conn->connect_error);
            
        }else{
            return true;
        }

        
    }




    public function __construct(){
        // //cria uma conexao ao banco de dados
        // session_start([
        //     'name' => 'conection',
        //     'httponly'=> true
        // ]);

        $this->criarConexao();
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
