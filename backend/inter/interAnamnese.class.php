<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';



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

    public function create(Anamnese $anamnese, Paciente $paciente)
    {
        $queixa = $anamnese->getQueixaPrincipal();
        $historico_familiar = $anamnese->getHistoricoFamiliar();
        $exame_fisico = $anamnese->getExameFisico();
        $habito_vida = $anamnese->getHabitosDeVida();

        $cpf = $paciente->getCpf();



        $sql = "INSERT INTO anamnese (queixaPrincipal, historicoFamiliar, exameFisico, habitosDeVida, cpf) 
                VALUES ('$queixa', '$historico_familiar', '$exame_fisico', '$habito_vida', '$cpf')";


        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }

    public function read()
    {

        $sql = "SELECT * FROM anamnese ORDER BY queixaPrincipal";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);


    }

    public function update($queixa, $habito_vida, $historico_familiar, $exame_fisico, $cpf)
    {

        $sql = "UPDATE anamnese
                SET queixaPrincipal = '$queixa',
                    historicoFamiliar = '$historico_familiar',
                    exameFisico = '$exame_fisico',
                    habitosDeVida = '$habito_vida'
                WHERE cpf = '$cpf'";

        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }

    public function delete()
    {

        $sql = "DELETE FROM anamnese WHERE id_anamnese = 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }

    public function fecharConexao()
    {
        if ($this->conn == null) {
            throw new Exception('Erro, não é possível fechar a conexão porque ela ainda não foi criada.');
        } else {
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
