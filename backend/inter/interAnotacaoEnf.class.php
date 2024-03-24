<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';

//intermediario da classe anotacao enfermagem

class InterAnotacaoEnf
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
INSERT INTO anotacaoEnfermagem (dataRegistro, cpf, hora, registro)
VALUES ('2024-03-20', '12345678901', '08:30:00', 'Alguma anotação');

        */
    }
    public function read()
    {
        $this->getConn();
        /*
SELECT * FROM anotacaoEnfermagem ORDER BY dataRegistro, hora; 
        */
    }
    public function update()
    {
        $this->getConn();
        /*
UPDATE anotacaoEnfermagem
SET dataRegistro = '2024-03-20',
    cpf = '12345678901',
    hora = '08:30:00',
    registro = 'Nova anotação'
WHERE id_anotacaoEnfermagem = 1;
        */
    }
    public function delete()
    {
        $this->getConn();
        /*
DELETE FROM anotacaoEnfermagem WHERE id_anotacaoEnfermagem = 1;
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