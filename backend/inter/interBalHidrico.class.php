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
    public function create(BalancoHidrico $balancoHidrico, $cpf = '179.982.092.74')
    {
        $this->getConn();
        $data = $balancoHidrico->getData();
        $hora = $balancoHidrico->getHora();
        $liquidos_administrados = $balancoHidrico->getLiquidosAdministrados();
        $liquidos_eliminados = $balancoHidrico->getLiquidosEliminados();
        $total_quant_elimi = $balancoHidrico->getLiquidosEliminados();
        $total_quanti_admini = $balancoHidrico->getTotalQuantAdministrada();
        $conclusao = $balancoHidrico->getConclusao();

        $via_oral = $liquidos_administrados->getViaOral();
        $via_patental = $liquidos_administrados->getViaParenteral();
        $quant_administrada = $liquidos_administrados->getQuantAdminstrada();
        $sondas = $liquidos_administrados->getSondas();
        $outros = $liquidos_administrados->getOutros();
        $diurese = $liquidos_eliminados->getDiurese();
        $estase = $liquidos_eliminados->getEstase();
        $vomito = $liquidos_eliminados->getVomito();
        $outros_eliminados = $liquidos_eliminados->getOutros();


        $sql = "INSERT INTO balancoHidrico (data, hora, liquidos_administrados, total_quant_administrada, total_quant_eliminada, conclusao, corem_med_enf, via_oral, via_parenteral, quant_administrada, sondas, outros, diurese, estase, vomito, outros_eliminados, cpf) 
        VALUES ('$data','$hora','$liquidos_administrados',$total_quanti_admini,$total_quant_elimi,'$conclusao',,$via_oral,$via_patental,$quant_administrada,$sondas,'$outros',$diurese,$estase,$vomito,'$outros_eliminados','$cpf')";


        $this->getConn()->query($sql);
    }
    public function read()
    {
        $this->getConn();
        $sql = "SELECT * FROM balancoHidrico; ";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }
    public function update($conclusao)
    {
        $this->getConn();
        $sql = "UPDATE balancoHidrico
        SET conclusao = '$conclusao'
        WHERE id_balancoHidrico = 1";

        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }
    public function delete()
    {

        $this->getConn();
        $sql = "DELETE FROM balancoHidrico WHERE id_balancoHidrico= 1";
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
