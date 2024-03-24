<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeClasses.php';
class Enfermeiro//ok
{
    private string $nome;
    private string $coren;
    private string $senha;

    public function __construct(string $coren, string $nome, string $senha)
    {
        $coren = new Coren($coren);
        $validar = new Validacao;
        $this->nome = $validar->valStr2($nome);
        $this->coren = $coren->getCoren();
        $this->senha = $validar->valStr2($senha);
        unset($validar);
        unset($coren);
    }

    // Métodos getters e setters

    public function getNome()
    {
        return $this->nome;
    }

    private function setNomeComp(string $nome)
    {
        $this->nome = $nome;
    }

    public function getCoren()
    {
        return $this->coren;
    }

    private function setCoren(string $coren)
    {
        $this->coren = $coren;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    private function setSenha(string $senha)
    {
        $this->senha = $senha;
    }

}
// $enf = new Enfermeiro('CORENMG00000ENF', 'eduardo', '123456');
// echo $enf->getCoren();
// echo $enf->getNome();
// echo $enf->getSenha();
