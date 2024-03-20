<?php

require 'medico';
require 'paciente.php';
require 'enfermeiro.php';

class prontuario {
    private $paciente;
    private $anamnese;
    private $anotacaoEnfermagem;
    private $balancoHidrico;

    public function prontuario($paciente, $anamnese, $anotacaoEnfermagem, $balancoHidrico) {
        $this->paciente = $paciente;
        $this->anamnese = $anamnese;
        $this->anotacaoEnfermagem = $anotacaoEnfermagem;
        $this->balancoHidrico = $balancoHidrico;
    }

    public function getPaciente() {
        return $this->paciente;
    }

    public function setPaciente($paciente) {
        $this->paciente = $paciente;
    }

    public function getAnamnese() {
        return $this->anamnese;
    }

    public function setAnamnese($anamnese) {
        $this->anamnese = $anamnese;
    }

    public function getAnotacaoEnfermagem() {
        return $this->anotacaoEnfermagem;
    }

    public function setAnotacaoEnfermagem($anotacaoEnfermagem) {
        $this->anotacaoEnfermagem = $anotacaoEnfermagem;
    }

    public function getBalancoHidrico() {
        return $this->balancoHidrico;
    }

    public function setBalancoHidrico($balancoHidrico) {
        $this->balancoHidrico = $balancoHidrico;
    }
}