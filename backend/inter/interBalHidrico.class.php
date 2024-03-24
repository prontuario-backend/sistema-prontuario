<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';

//intermediario da classe balanço hidrico

class InterBalHidrico
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
INSERT INTO balancoHidrico (data, hora, liquidos_administrados, liquidos_eliminados, total_quant_administrada, total_quant_eliminada, conclusao, corem_med_enf, via_oral, via_parenteral, quant_administrada, sondas, outros, diurese, estase, vomito, outros_eliminados, cpf)
VALUES ('2024-03-20', '08:30:00', 'Líquidos administrados', 'Líquidos eliminados', 100.5, 90.5, 10.0, 'COREM Médico Enfermeiro', 50.0, 40.0, 20.0, 10.0, 5.0, 30.0, 15.0, 10.0, 5.0, '12345678901');
        */
    }
    public function read()
    {
        $this->getConn();
        /*
SELECT * FROM balancoHidrico;
        */
    }
    public function update()
    {
        $this->getConn();
        /*
UPDATE balancoHidrico
SET conclusao = 20.0   // Aqui você está especificando qual coluna você deseja atualizar e o novo valor que
 deseja definir para essa coluna. Neste caso, você está atualizando a coluna conclusao para ter o valor 20.0 para altera o valor da coluna 
WHERE id_balancoHidrico = 1;
        */
    }
    public function delete()
    {
        $this->getConn();
        /*
DELETE FROM balancoHidrico
WHERE id_balancoHidrico = 1;
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

if (isset ($_POST['data'])) {
    if (isset ($_POST['hora'])) {
        if (isset ($_POST['tipo'])) {
            if (isset ($_POST['elim'])) {
                $data = $_POST['data'];
                $hora = $_POST['hora'];
                $tipoElim = $_POST['tipo'];

                $bal = new InterBalHidrico();
                $val->create();
            }
        }
    }
}
