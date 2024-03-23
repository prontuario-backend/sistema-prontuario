<?php
include_once '';



//intermediario da classe anamnese

class InterAnamnese
{
    private mysqli $conn;
    public function __construct()
    {
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);

    }
    public function create(Anamnese $anamnese, Cpf $cpf)
    {
        $this->getConn();
        $queixa = $anamnese->getQueixaPrincipal();
        $historico_familiar = $anamnese->getHistoricoFamiliar();
        $exame_fisico = $anamnese->getExameFisico();
        $habito_vida = $anamnese->getHabitosDeVida();
        $cpf = $cpf->getCpf();

        $sql = "INSERT INTO anamnese (queixaPrincipal, historicoFamiliar, exameFisico, habitosDeVida, cpf) 
                VALUES ('$queixa', '$historico_familiar', '$exame_fisico', '$habito_vida', '$cpf')";

        $this->getConn()->query($sql);

    }

    public function read()
    {
        $this->getConn();
        $sql = "SELECT * FROM anamnese ORDER BY queixaPrincipal; ";
        $this->getConn()->query($sql);
    }
    public function update()
    {
        $this->getConn();
        $sql = "UPDATE anamnese
        SET queixaPrincipal = 'Nova Queixa Principal', historicoFamiliar = 'Novo Histórico Familiar', exameFisico = 'Novo Exame Físico', habitosDeVida = 'Novos Hábitos de Vida',cpf ='1345676987'
        WHERE id_anamnese = 1";
        $this->getConn()->query($sql);
    }
    public function delete()
    {
        $this->getConn();
        $sql = "DELETE FROM anamnese WHERE id_anamnese = 1";
        $this->getConn()->query($sql);
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