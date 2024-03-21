<?php
include __DIR__ . '/includeClasses.php';
class BalancoHidrico
{
    private string $data;
    private string $hora;
    private string $liquidosAdministrados;
    private string $liquidosEliminados;
    private string $totalQuantAdministrada;
    private string $totalQuantEliminada;
    private string $conclusao;
    private string $coremMedEnf;

    public function balancoHidrico(string $data, string $hora, string $liquidosAdministrados, string $liquidosEliminados, string $totalQuantAdministrada, string $totalQuantEliminada, string $conclusao, string $coremMedEnf)
    {
        $validar = new Validacao;
        $this->data = $validar->valStr($data);
        $this->hora = $validar->valStr($hora);
        $this->liquidosAdministrados = $validar->valStr($liquidosAdministrados);
        $this->liquidosEliminados = $validar->valStr($liquidosEliminados);
        $this->totalQuantAdministrada = $validar->valStr($totalQuantAdministrada);
        $this->totalQuantEliminada = $validar->valStr($totalQuantEliminada);
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

    private function setLiquidosAdministrados(string $liquidosAdministrados)
    {
        $this->liquidosAdministrados = $liquidosAdministrados;
    }

    public function getLiquidosEliminados()
    {
        return $this->liquidosEliminados;
    }

    private function setLiquidosEliminados(string $liquidosEliminados)
    {
        $this->liquidosEliminados = $liquidosEliminados;
    }

    public function getTotalQuantAdministrada()
    {
        return $this->totalQuantAdministrada;
    }

    private function setTotalQuantAdministrada(string $totalQuantAdministrada)
    {
        $this->totalQuantAdministrada = $totalQuantAdministrada;
    }

    public function getTotalQuantEliminada()
    {
        return $this->totalQuantEliminada;
    }

    private function setTotalQuantEliminada(string $totalQuantEliminada)
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
