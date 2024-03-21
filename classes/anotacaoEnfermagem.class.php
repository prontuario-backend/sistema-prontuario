<?php
include __DIR__ . '/includeClasses.php';
class AnotacaoEnfermagem//ok
{
    private string $dataRegistro;
    private string $hora;
    private string $registro;

    public function __construct(string $dataRegistro, string $hora, string $registro)
    {

        $this->dataRegistro = $dataRegistro;
        $this->hora = $hora;
        $this->registro = $registro;
        unset($validar);
    }

    // Métodos getters e setters

    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }

    private function setDataRegistro(string $dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }

    public function getHora()
    {
        return $this->hora;
    }

    private function setHora(string $hora)
    {
        $this->hora = $hora;
    }

    public function getRegistro()
    {
        return $this->registro;
    }

    private function setRegistro(string $registro)
    {
        $this->registro = $registro;
    }
}
// $anot = new AnotacaoEnfermagem('00/00/0000', 'teste', 'teste2');
// echo $anot->getDataRegistro() . '<br>';
// echo $anot->getHora() . '<br>';
// echo $anot->getRegistro() . '<br>';