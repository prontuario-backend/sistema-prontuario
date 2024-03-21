<?php
include_once '../classes/includeClasses.php';



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
    public function create(Anamnese $anamnese)
    {
        $this->getConn();
        /*
INSERT INTO anamnese (queixaPrincipal, historicoFamiliar, exameFisico, habitosDeVida,cpf)
VALUES ('Queixa Principal do Paciente', 'Histórico Familiar do Paciente', 'Exame Físico do Paciente', 'Hábitos de Vida do Paciente','123456789-11');
        */
    }
    public function read()
    {
        $this->getConn();
        /*
SELECT * FROM anamnese ORDER BY queixaPrincipal; 
        */
    }
    public function update()
    {
        $this->getConn();
        /*
UPDATE anamnese
SET queixaPrincipal = 'Nova Queixa Principal', historicoFamiliar = 'Novo Histórico Familiar', exameFisico = 'Novo Exame Físico', habitosDeVida = 'Novos Hábitos de Vida',cpf ='1345676987'
WHERE id_anamnese = 1;  

        */
    }
    public function delete()
    {
        $this->getConn();
        /*
DELETE FROM Anamnese WHERE id = 1;
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