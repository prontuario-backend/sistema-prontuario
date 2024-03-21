<?php
include __DIR__ . '/includeClasses.php';
class LiquidosEliminados
{
    private float $diurese;
    private float $estase;
    private float $vomito;
    private float $outros;

    public function __construct(float $diurese, float $estase, float $vomito, float $outros)
    {
        $validar = new Validacao;
        $this->diurese = $validar->valFloat($diurese);
        $this->estase = $validar->valFloat($estase);
        $this->vomito = $validar->valFloat($vomito);
        $this->outros = $validar->valFloat($outros);
        unset($validar);
    }

    // Métodos getters e setters

    public function getDiurese()
    {
        return $this->diurese;
    }

    private function setDiuresefloat($diurese)
    {
        $this->diurese = $diurese;
    }

    public function getEstase()
    {
        return $this->estase;
    }

    private function setEstase(float $estase)
    {
        $this->estase = $estase;
    }

    public function getVomito()
    {
        return $this->vomito;
    }

    private function setVomito(float $vomito)
    {
        $this->vomito = $vomito;
    }

    public function getOutros()
    {
        return $this->outros;
    }

    private function setOutros(float $outros)
    {
        $this->outros = $outros;
    }
}
