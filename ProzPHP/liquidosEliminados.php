<?php

class LiquidosEliminados {
    private $diurese;
    private $estase;
    private $vomito;
    private $outros;

    public function __construct($diurese, $estase, $vomito, $outros) {
        $this->diurese = $diurese;
        $this->estase = $estase;
        $this->vomito = $vomito;
        $this->outros = $outros;
    }

    // Métodos getters e setters

    public function getDiurese() {
        return $this->diurese;
    }

    public function setDiurese($diurese) {
        $this->diurese = $diurese;
    }

    public function getEstase() {
        return $this->estase;
    }

    public function setEstase($estase) {
        $this->estase = $estase;
    }

    public function getVomito() {
        return $this->vomito;
    }

    public function setVomito($vomito) {
        $this->vomito = $vomito;
    }

    public function getOutros() {
        return $this->outros;
    }

    public function setOutros($outros) {
        $this->outros = $outros;
    }
}
