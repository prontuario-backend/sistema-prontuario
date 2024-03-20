<?php

class balancoHidrico {
    private $data;
    private $hora;
    private $liquidosAdministrados;
    private $liquidosEliminados;
    private $totalQuantAdministrada;
    private $totalQuantEliminada;
    private $conclusao;
    private $coremMedEnf;

    public function balancoHidrico($data, $hora, $liquidosAdministrados, $liquidosEliminados, $totalQuantAdministrada, $totalQuantEliminada, $conclusao, $coremMedEnf) {
        $this->data = $data;
        $this->hora = $hora;
        $this->liquidosAdministrados = $liquidosAdministrados;
        $this->liquidosEliminados = $liquidosEliminados;
        $this->totalQuantAdministrada = $totalQuantAdministrada;
        $this->totalQuantEliminada = $totalQuantEliminada;
        $this->conclusao = $conclusao;
        $this->coremMedEnf = $coremMedEnf;
    }

    // Métodos getters e setters

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getLiquidosAdministrados() {
        return $this->liquidosAdministrados;
    }

    public function setLiquidosAdministrados($liquidosAdministrados) {
        $this->liquidosAdministrados = $liquidosAdministrados;
    }

    public function getLiquidosEliminados() {
        return $this->liquidosEliminados;
    }

    public function setLiquidosEliminados($liquidosEliminados) {
        $this->liquidosEliminados = $liquidosEliminados;
    }

    public function getTotalQuantAdministrada() {
        return $this->totalQuantAdministrada;
    }

    public function setTotalQuantAdministrada($totalQuantAdministrada) {
        $this->totalQuantAdministrada = $totalQuantAdministrada;
    }

    public function getTotalQuantEliminada() {
        return $this->totalQuantEliminada;
    }

    public function setTotalQuantEliminada($totalQuantEliminada) {
        $this->totalQuantEliminada = $totalQuantEliminada;
    }

    public function getConclusao() {
        return $this->conclusao;
    }

    public function setConclusao($conclusao) {
        $this->conclusao = $conclusao;
    }

    public function getCoremMedEnf() {
        return $this->coremMedEnf;
    }

    public function setCoremMedEnf($coremMedEnf) {
        $this->coremMedEnf = $coremMedEnf;
    }
}