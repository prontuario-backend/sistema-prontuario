<?php

class anamnese {
    // Atributos
    private $tipoDiagnostico;
    private $tipoCIDNANDA;
    private $dados;
    private $dadosAnamnese;
    private $nomeProfissionalQueFezDiagnostico;
    private $exameFisico;

    // Construtor
    public function __construct($tipoDiagnostico, $tipoCIDNANDA, $dados, $dadosAnamnese, $nomeProfissionalQueFezDiagnostico, $exameFisico) {
        $this->tipoDiagnostico = $tipoDiagnostico;
        $this->tipoCIDNANDA = $tipoCIDNANDA;
        $this->dados = $dados;
        $this->dadosAnamnese = $dadosAnamnese;
        $this->nomeProfissionalQueFezDiagnostico = $nomeProfissionalQueFezDiagnostico;
        $this->exameFisico = $exameFisico;
    }

    // Métodos getters e setters...

    //diagnóstico
    public function setTipoDiagnostico($tipoDiagnostico) {
        $this->tipoDiagnostico = $tipoDiagnostico;
    }

    public function getTipoDiagnostico() {
        return $this->tipoDiagnostico;
    }

    // CID/NANDA
    public function setTipoCIDNANDA($tipoCIDNANDA) {
        $this->tipoCIDNANDA = $tipoCIDNANDA;
    }

    public function getTipoCIDNANDA() {
        return $this->tipoCIDNANDA;
    }

    // dados
    public function setDados($dados) {
        $this->dados = $dados;
    }

    public function getDados() {
        return $this->dados;
    }

    // anamnese
    public function setDadosAnamnese($dadosAnamnese) {
        $this->dadosAnamnese = $dadosAnamnese;
    }

    public function getDadosAnamnese() {
        return $this->dadosAnamnese;
    }

    // Setter para nome do profissional que fez o diagnóstico
    public function setNomeProfissionalQueFezDiagnostico($nomeProfissional) {
        $this->nomeProfissionalQueFezDiagnostico = $nomeProfissional;
    }

    public function getNomeProfissionalQueFezDiagnostico() {
        return $this->nomeProfissionalQueFezDiagnostico;
    }

    // físico
    public function setExameFisico($exameFisico) {
        $this->exameFisico = $exameFisico;
    }

    public function getExameFisico() {
        return $this->exameFisico;
    }
}

?>
