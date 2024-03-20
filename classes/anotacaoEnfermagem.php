<?php

class anotacaoEnfermagem {
    private $dataRegistro;
    private $hora;
    private $registro;

    public function anotacaoEnfermagem($dataRegistro, $hora, $registro) {
        $this->dataRegistro = $dataRegistro;
        $this->hora = $hora;
        $this->registro = $registro;
    }

    // Métodos getters e setters

    public function getDataRegistro() {
        return $this->dataRegistro;
    }

    public function setDataRegistro($dataRegistro) {
        $this->dataRegistro = $dataRegistro;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registro) {
        $this->registro = $registro;
    }
}
