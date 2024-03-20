<?php

class anotacaoEnfermagem {
    private string $dataRegistro;
    private string $hora;
    private string $registro;

    public function anotacaoEnfermagem(string $dataRegistro, string $hora, string $registro) {
        $this->dataRegistro = $dataRegistro;
        $this->hora = $hora;
        $this->registro = $registro;
    }

    // Métodos getters e setters

    public function getDataRegistro() {
        return $this->dataRegistro;
    }

   private function setDataRegistro(string $dataRegistro) {
        $this->dataRegistro = $dataRegistro;
    }

    public function getHora() {
        return $this->hora;
    }

   private function setHora(string $hora) {
        $this->hora = $hora;
    }

    public function getRegistro() {
        return $this->registro;
    }

   private function setRegistro(string $registro) {
        $this->registro = $registro;
    }
}
