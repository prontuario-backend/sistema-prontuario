<?php
include __DIR__ . '/includeClasses.php';

class Prontuario
{//ok
    private Paciente $paciente;
    private Anamnese $anamnese;
    private AnotacaoEnfermagem $anotacaoEnfermagem;
    private BalancoHidrico $balancoHidrico;

    public function __construct(Paciente $paciente, Anamnese $anamnese, AnotacaoEnfermagem $anotacaoEnfermagem, BalancoHidrico $balancoHidrico)
    {
        $this->paciente = $paciente;
        $this->anamnese = $anamnese;
        $this->anotacaoEnfermagem = $anotacaoEnfermagem;
        $this->balancoHidrico = $balancoHidrico;
    }

    public function getPaciente()
    {
        return $this->paciente;
    }

    private function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }

    public function getAnamnese()
    {
        return $this->anamnese;
    }

    private function setAnamnese($anamnese)
    {
        $this->anamnese = $anamnese;
    }

    public function getAnotacaoEnfermagem()
    {
        return $this->anotacaoEnfermagem;
    }

    private function setAnotacaoEnfermagem($anotacaoEnfermagem)
    {
        $this->anotacaoEnfermagem = $anotacaoEnfermagem;
    }

    public function getBalancoHidrico()
    {
        return $this->balancoHidrico;
    }

    private function setBalancoHidrico($balancoHidrico)
    {
        $this->balancoHidrico = $balancoHidrico;
    }
}