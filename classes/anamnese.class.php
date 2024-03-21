<?php
include __DIR__ . '/includeClasses.php';
class Anamnese
{
    private string $queixaPrincipal;
    private string $historicoFamiliar;
    private string $exameFisico;
    private string $habitosDeVida;

    public function __construct(string $queixaPrincipal, string $historicoFamiliar, string $exameFisico, string $habitosDeVida)
    {
        $validar = new Validacao;
        $this->queixaPrincipal = $validar->valStr($queixaPrincipal);
        $this->historicoFamiliar = $validar->valStr($historicoFamiliar);
        $this->exameFisico = $validar->valStr($exameFisico);
        $this->habitosDeVida = $validar->valStr($habitosDeVida);
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

    public function setExameFisico(string $exameFisico)
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