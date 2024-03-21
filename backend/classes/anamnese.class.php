<?php
include __DIR__ . '/includeClasses.php';
class Anamnese//ok
{
    private string $queixaPrincipal;
    private string $historicoFamiliar;
    private string $exameFisico;
    private string $habitosDeVida;

    public function __construct(string $queixaPrincipal, string $historicoFamiliar, string $exameFisico, string $habitosDeVida)
    {
        $validar = new Validacao;
        $this->queixaPrincipal = $validar->valStr2($queixaPrincipal);
        $this->historicoFamiliar = $validar->valStr2($historicoFamiliar);
        $this->exameFisico = $validar->valStr2($exameFisico);
        $this->habitosDeVida = $validar->valStr2($habitosDeVida);
    }

    // Métodos getters e setters

    public function getQueixaPrincipal()
    {
        return $this->queixaPrincipal;
    }

    private function setQueixaPrincipal(string $queixaPrincipal)
    {
        $this->queixaPrincipal = $queixaPrincipal;
    }

    public function getHistoricoFamiliar()
    {
        return $this->historicoFamiliar;
    }

    private function setHistoricoFamiliar(string $historicoFamiliar)
    {
        $this->historicoFamiliar = $historicoFamiliar;
    }

    public function getExameFisico()
    {
        return $this->exameFisico;
    }

    private function setExameFisico(string $exameFisico)
    {
        $this->exameFisico = $exameFisico;
    }

    public function getHabitosDeVida()
    {
        return $this->habitosDeVida;
    }

    private function setHabitosDeVida(string $habitosDeVida)
    {
        $this->habitosDeVida = $habitosDeVida;


    }
}
// $anam = new Anamnese('dor nas costas', 'diabetes', 'exame fisico ok', 'sedentarismo leve');
// echo $anam->getQueixaPrincipal() . '<br>';
// echo $anam->getHistoricoFamiliar() . '<br>';
// echo $anam->getExameFisico() . '<br>';
// echo $anam->getHabitosDeVida() . '<br>';