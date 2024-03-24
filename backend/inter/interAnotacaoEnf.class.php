<?php

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

    public function create(AnotacaoEnfermagem $anotacaoEnfermagem, Paciente $paciente)
    {
        $this->getConn();
        $data_registro = $anotacaoEnfermagem->getDataRegistro();
        $cpf = $paciente->getCpf();
        $hora = $anotacaoEnfermagem->getHora();
        $registro = $anotacaoEnfermagem->getRegistro();
        $sql = "INSERT INTO anotacaoEnfermagem (dataRegistro, cpf, hora, registro)
        VALUES ('$data_registro', '$cpf', '$hora', '$registro')";


        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }
    public function read()
    {
        $this->getConn();
        $sql = "SELECT * FROM anotacaoEnfermagem ORDER BY dataRegistro, hora;";
        $result = $this->getConn()->query($sql);
        return $result;
    }

    public function update(AnotacaoEnfermagem $anotacaoEnfermagem, Paciente $paciente)
    {
        $this->getConn();
        $data_registro = $anotacaoEnfermagem->getDataRegistro();
        $cpf = $paciente->getCpf();
        $hora = $anotacaoEnfermagem->getHora();
        $registro = $anotacaoEnfermagem->getRegistro();

        $sql = "UPDATE anotacaoEnfermagem
        SET dataRegistro = '$data_registro',
            cpf ='$cpf',
            hora ='$hora',
            registro ='$registro'
            WHERE id_anotacaoEnfermagem = 1";

        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }
    public function delete()
    {
        $this->getConn();
        $sql = "DELETE FROM anotacaoEnfermagem WHERE id_anotacaoEnfermagem  = 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
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