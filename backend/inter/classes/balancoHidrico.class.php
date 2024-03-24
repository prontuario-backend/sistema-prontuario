<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeClasses.php';
class BalancoHidrico//ok
{
    private string $data;
    private string $hora;
    private LiquidosAdministrados $liquidosAdministrados;
    private LiquidosEliminados $liquidosEliminados;
    private float $totalQuantAdministrada;
    private float $totalQuantEliminada;
    private string $conclusao;
    // private string $coremMedEnf;

    public function __construct(string $data, string $hora, LiquidosAdministrados $liquidosAdministrados, LiquidosEliminados $liquidosEliminados, float $totalQuantAdministrada, float $totalQuantEliminada, string $conclusao, )//string $coremMedEnf
    {
        $validar = new Validacao;
        $this->data = $validar->valStr2($data);
        $this->hora = $validar->valStr2($hora);
        $this->liquidosAdministrados = $liquidosAdministrados;
        $this->liquidosEliminados = $liquidosEliminados;
        $this->totalQuantAdministrada = $validar->valfloat($totalQuantAdministrada);
        $this->totalQuantEliminada = $validar->valFloat($totalQuantEliminada);
        $this->conclusao = $validar->valStr2($conclusao);
        // $this->coremMedEnf = $validar->valStr2($coremMedEnf);
        unset($validar);
    }

    // Métodos getters e setters

    public function getData()
    {
        return $this->data;
    }

    private function setData(string $data)
    {
        $this->data = $data;
    }

    public function getHora()
    {
        return $this->hora;
    }

    private function setHora(string $hora)
    {
        $this->hora = $hora;
    }

    public function getLiquidosAdministrados()
    {
        return $this->liquidosAdministrados;
    }

    private function setLiquidosAdministrados(LiquidosAdministrados $liquidosAdministrados)
    {
        $this->liquidosAdministrados = $liquidosAdministrados;
    }

    public function getLiquidosEliminados()
    {
        return $this->liquidosEliminados;
    }

    private function setLiquidosEliminados(LiquidosEliminados $liquidosEliminados)
    {
        $this->liquidosEliminados = $liquidosEliminados;
    }

    public function getTotalQuantAdministrada()
    {
        return $this->totalQuantAdministrada;
    }

    private function setTotalQuantAdministrada(float $totalQuantAdministrada)
    {
        $this->totalQuantAdministrada = $totalQuantAdministrada;
    }

    public function getTotalQuantEliminada()
    {
        return $this->totalQuantEliminada;
    }

    private function setTotalQuantEliminada(float $totalQuantEliminada)
    {
        $this->totalQuantEliminada = $totalQuantEliminada;
    }

    public function getConclusao()
    {
        return $this->conclusao;
    }

    private function setConclusao(string $conclusao)
    {
        $this->conclusao = $conclusao;
    }

    // public function getCoremMedEnf()
    // {
    //     return $this->coremMedEnf;
    // }

    // private function setCoremMedEnf(string $coremMedEnf)
    // {
    //     $this->coremMedEnf = $coremMedEnf;
    // }
}
// $adm = new LiquidosAdministrados(0.5, 0.6, 0.7, 0.8, 0.9);

// $elim = new LiquidosEliminados(0.5, 0.6, 0.7, 0.8);

// $bal = new BalancoHidrico('00/00/00', '2:00pm', $adm, $elim, 10, 5, 'teste');
// echo $bal->getConclusao();