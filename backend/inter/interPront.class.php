<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';

//intermediario da classe prontuario

class InterProntuario
{

    private mysqli $conn;
    public function __construct()
    {
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    public function create()
    {
        $this->getConn();
        /*
INSERT INTO Prontuario (paciente, anamnese,anotacaoEnfermagem, balancoHidrico)
VALUES (1, 1, 1, 1);
        */
    }
    public function read()
    {
        $this->getConn();
        /*
SELECT * FROM prontuario;
        */
    }
    public function update()
    {
        $this->getConn();
        /*
UPDATE prontuario
SET paciente = 'Novo Objeto Paciente', anamnese = 'Novo Objeto Anamnese', anotacaoEnfermagem = 'Novo Objeto Anotação de Enfermagem', balancoHidrico = 'Novo Objeto Balanço Hídrico' WHERE id_prontuario = 1;  
        */
    }
    public function delete()
    {
        $this->getConn();
        /*
DELETE FROM prontuario WHERE id = 1;
        */
    }


    public function fecharConexao()
    {
        //fecha uma conexao ja iniciada
        if ($this->conn == null) {
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel fechar a conexão pois uma conexão ainda não foi criada.');
        } else {
            // session_destroy();
            $this->conn->close();
            unset($this->conn);
        }
    }
    public function getConn()
    {
        //retorna um objeto de conexao mysqli referente ao atributo 'conn'
        if ($this->conn == null) {
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel retornar o atributo $conn pois uma conexão ainda não foi criada.');
        } else {
            return $this->conn;
        }
    }
}