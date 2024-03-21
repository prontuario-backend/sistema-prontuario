<?php
include __DIR__ . '/includeClasses.php';
class BalancoHidrico
{
    private string $data;
    private string $hora;
    private LiquidosAdministrados $liquidosAdministrados;
    private LiquidosEliminados $liquidosEliminados;
    private float $totalQuantAdministrada;
    private float $totalQuantEliminada;
    private string $conclusao;
    private string $coremMedEnf;

    public function balancoHidrico(string $data, string $hora, LiquidosAdministrados $liquidosAdministrados, LiquidosEliminados $liquidosEliminados, float $totalQuantAdministrada, float $totalQuantEliminada, string $conclusao, string $coremMedEnf)
    {
        $validar = new Validacao;
        $this->data = $validar->valStr($data);
        $this->hora = $validar->valStr($hora);
        $this->liquidosAdministrados = $liquidosAdministrados;
        $this->liquidosEliminados = $liquidosEliminados;
        $this->totalQuantAdministrada = $validar->valfloat($totalQuantAdministrada);
        $this->totalQuantEliminada = $validar->valFloat($totalQuantEliminada);
        $this->conclusao = $validar->valStr($conclusao);
        $this->coremMedEnf = $validar->valStr($coremMedEnf);
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

    public function getCoremMedEnf()
    {
        return $this->coremMedEnf;
    }

    private function setCoremMedEnf(string $coremMedEnf)
    {
        $this->coremMedEnf = $coremMedEnf;
    }
}
