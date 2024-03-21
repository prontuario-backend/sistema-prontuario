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
// $pasc = new Paciente("Maria da Silva", "01/01/1990", "Feminino", "Parda", "maria.silva@example.com", 1.65, 60.5, "Ana da Silva", "João da Silva", "(11) 91234-5678", "01001-000", "Rua das Flores, 123", "12345678910");

// $adm = new LiquidosAdministrados(0.5, 0.6, 0.7, 0.8, 0.9);

// $elim = new LiquidosEliminados(0.5, 0.6, 0.7, 0.8);

// $bal = new BalancoHidrico('00/00/00', '2:00pm', $adm, $elim, 10, 5, 'teste');
// echo $bal->getConclusao();

// $anot = new AnotacaoEnfermagem('00/00/0000', 'teste', 'teste2');

// $anam = new Anamnese('dor nas costas', 'diabetes', 'exame fisico ok', 'sedentarismo leve');

// $prontuario = new Prontuario($pasc, $anam, $anot, $bal, );
// $prontuario->getPaciente()->getNome();
