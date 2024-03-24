<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';

//intermediario da classe prontuario

// Intermediário da classe prontuario
class InterProntuario
{
    private mysqli $conn;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    public function create(Prontuario $prontuario)
    {
        $this->getConn();

        $idpaciente = $prontuario->getPaciente();
        $idanamnese = $prontuario->getAnamnese();
        $idanotacaoEnfermagem = $prontuario->getAnotacaoEnfermagem();
        $idbalancoHidrico = $prontuario->getBalancoHidrico();

        $sql = "INSERT INTO prontuario (paciente, anamnese, anotacaoEnfermagem, balancoHidrico)
                VALUES ($idpaciente, $idanamnese, $idanotacaoEnfermagem, $idbalancoHidrico)";


        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }

    public function read()
    {
        $this->getConn();

        $sql = "SELECT * FROM prontuario";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function update($id, $idpaciente, $idanamnese, $idanotacaoEnfermagem, $idbalancoHidrico)
    {
        $this->getConn();

        $sql = "UPDATE prontuario SET 
                paciente = $idpaciente, 
                anamnese = $idanamnese, 
                anotacaoEnfermagem = $idanotacaoEnfermagem, 
                balancoHidrico = $idbalancoHidrico 
                WHERE id_prontuario = $id";


        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }

    public function delete($id)
    {
        $this->getConn();

        $sql = "DELETE FROM prontuario WHERE id_prontuario = $id";

        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }

    public function fecharConexao()
    {
        if ($this->conn == null) {
            throw new Exception('Erro, não é possível fechar a conexão pois uma conexão ainda não foi criada.');
        } else {
            $this->conn->close();
            unset($this->conn);
        }
    }

    public function getConn()
    {
        if ($this->conn == null) {
            throw new Exception('Erro, não é possível retornar o atributo $conn pois uma conexão ainda não foi criada.');
        } else {
            return $this->conn;
        }
    }
}
