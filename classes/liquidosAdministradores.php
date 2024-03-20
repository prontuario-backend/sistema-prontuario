<?php

class LiquidosAdministrados {
    private $viaOral;
    private $viaParenteral;
    private $quantAdminstrada;
    private $sondas;
    private $outros;

    public function __construct($viaOral, $viaParenteral, $quantAdminstrada, $sondas, $outros) {
        $this->viaOral = $viaOral;
        $this->viaParenteral = $viaParenteral;
        $this->quantAdminstrada = $quantAdminstrada;
        $this->sondas = $sondas;
        $this->outros = $outros;
    }

    // Métodos getters e setters

    public function getViaOral() {
        return $this->viaOral;
    }

    public function setViaOral($viaOral) {
        $this->viaOral = $viaOral;
    }

    public function getViaParenteral() {
        return $this->viaParenteral;
    }

    public function setViaParenteral($viaParenteral) {
        $this->viaParenteral = $viaParenteral;
    }

    public function getQuantAdminstrada() {
        return $this->quantAdminstrada;
    }

    public function setQuantAdminstrada($quantAdminstrada) {
        $this->quantAdminstrada = $quantAdminstrada;
    }

    public function getSondas() {
        return $this->sondas;
    }

    public function setSondas($sondas) {
        $this->sondas = $sondas;
    }

    public function getOutros() {
        return $this->outros;
    }

    public function setOutros($outros) {
        $this->outros = $outros;
    }
}
