<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';


//intermediario da classe pasciente

class InterPasc
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
INSERT INTO paciente (nome, data_nasc, sexo, raca, email, altura, peso, nome_mae, nome_pai, telefone, cep, endereco, cpf)
VALUES ('Nome do Paciente', '2005-08-16', 'Gênero do Paciente', 'Raça do Paciente', 'Email do Paciente', 1.75, 70.5, 'Nome da Mãe do Paciente', 'Nome do Pai do Paciente', 'Telefone do Paciente', 'CEP do Paciente', 'Endereço do Paciente', 'CPF do Paciente');
        */
    }
    public function read()
    {
        $this->getConn();
        /*
SELECT * FROM paciente ORDER BY nome; 
        */
    }
    public function update()
    {
        $this->getConn();
        /*
SET nome = 'Nome do Paciente', 
    data_nasc = '2005-08-16', 
    sexo = 'Gênero do Paciente', 
    raca = 'Raça do Paciente', 
    email = 'Email do Paciente', 
    altura = 1.75, 
    peso = 70.5, 
    nome_mae = 'Nome da Mãe do Paciente', 
    nome_pai = 'Nome do Pai do Paciente', 
    telefone = 'Telefone do Paciente', 
    cep = 'CEP do Paciente', 
    endereco = 'Endereço do Paciente', 
    cpf = 'CPF do Paciente'
WHERE id_paciente = 1;
        */
    }
    public function delete()
    {
        $this->getConn();
        /*
DELETE FROM paciente WHERE id_paciente = 1;

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
