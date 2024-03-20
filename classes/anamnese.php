<?php

class Anamnese {
    private $queixaPrincipal;
    private $historicoFamiliar;
    private $exameFisico;
    private $habitosDeVida;

    public function __construct($queixaPrincipal, $historicoFamiliar, $exameFisico, $habitosDeVida) {
        $this->queixaPrincipal = $queixaPrincipal;
        $this->historicoFamiliar = $historicoFamiliar;
        $this->exameFisico = $exameFisico;
        $this->habitosDeVida = $habitosDeVida;
    }

    // Métodos getters e setters

    public function getQueixaPrincipal() {
        return $this->queixaPrincipal;
    }

    public function setQueixaPrincipal($queixaPrincipal) {
        $this->queixaPrincipal = $queixaPrincipal;
    }

    public function getHistoricoFamiliar() {
        return $this->historicoFamiliar;
    }

    public function setHistoricoFamiliar($historicoFamiliar) {
        $this->historicoFamiliar = $historicoFamiliar;
    }

    public function getExameFisico() {
        return $this->exameFisico;
    }

    public function setExameFisico($exameFisico) {
        $this->exameFisico = $exameFisico;
    }

    public function getHabitosDeVida() {
        return $this->habitosDeVida;
    }

    public function setHabitosDeVida($habitosDeVida) {
        $this->habitosDeVida = $habitosDeVida;
    }
}

