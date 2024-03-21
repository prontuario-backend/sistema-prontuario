<?php
include __DIR__ . '/includeClasses.php';
class LiquidosAdministrados//ok
{
    private float $viaOral;
    private float $viaParenteral;
    private float $quantAdminstrada;
    private float $sondas;
    private float $outros;

    public function __construct(float $viaOral, float $viaParenteral, float $quantAdminstrada, float $sondas, float $outros)
    {
        $validar = new Validacao;
        $this->viaOral = $validar->valFloat($viaOral);
        $this->viaParenteral = $validar->valFloat($viaParenteral);
        $this->quantAdminstrada = $validar->valFloat($quantAdminstrada);
        $this->sondas = $validar->valFloat($sondas);
        $this->outros = $validar->valFloat($outros);
        unset($validar);
    }

    // Métodos getters e setters

    public function getViaOral()
    {
        return $this->viaOral;
    }

    private function setViaOral(float $viaOral)
    {
        $this->viaOral = $viaOral;
    }

    public function getViaParenteral()
    {
        return $this->viaParenteral;
    }

    private function setViaParenteralfloat($viaParenteral)
    {
        $this->viaParenteral = $viaParenteral;
    }

    public function getQuantAdminstrada()
    {
        return $this->quantAdminstrada;
    }

    private function setQuantAdminstrada(float $quantAdminstrada)
    {
        $this->quantAdminstrada = $quantAdminstrada;
    }

    public function getSondas()
    {
        return $this->sondas;
    }

    private function setSondas(float $sondas)
    {
        $this->sondas = $sondas;
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
// $adm = new LiquidosAdministrados(0.5, 0.6, 0.7, 0.8, 0.9);
// echo $adm->getViaOral();