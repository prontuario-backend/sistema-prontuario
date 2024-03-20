<?php

class Anamnese {
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
   private function setTipoDiagnostico($tipoDiagnostico) {
        $this->tipoDiagnostico = $tipoDiagnostico;
    }

    public function getTipoDiagnostico() {
        return $this->tipoDiagnostico;
    }

    // CID/NANDA
   private function setTipoCIDNANDA($tipoCIDNANDA) {
        $this->tipoCIDNANDA = $tipoCIDNANDA;
    }

    public function getTipoCIDNANDA() {
        return $this->tipoCIDNANDA;
    }

    // dados
   private function setDados($dados) {
        $this->dados = $dados;
    }

    public function getDados() {
        return $this->dados;
    }

    // anamnese
   private function setDadosAnamnese($dadosAnamnese) {
        $this->dadosAnamnese = $dadosAnamnese;
    }

    public function getDadosAnamnese() {
        return $this->dadosAnamnese;
    }

    // Setter para nome do profissional que fez o diagnóstico
   private function setNomeProfissionalQueFezDiagnostico($nomeProfissional) {
        $this->nomeProfissionalQueFezDiagnostico = $nomeProfissional;
    }

    public function getNomeProfissionalQueFezDiagnostico() {
        return $this->nomeProfissionalQueFezDiagnostico;
    }

    // físico
   private function setExameFisico($exameFisico) {
        $this->exameFisico = $exameFisico;
    }

    public function getExameFisico() {
        return $this->exameFisico;
    }
}

?>
