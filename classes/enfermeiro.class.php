<?php
include __DIR__ . '/includeClasses.php';
class Enfermeiro
{
    private string $nome;
    private string $coren;
    private string $senha;

    public function enfermeiro(string $nome, string $coren, string $senha)
    {
        $coren = new Coren($coren);
        $validar = new Validacao;
        $this->nome = $validar->valStr($nome);
        $this->coren = $coren->getCoren();
        $this->senha = $validar->valStr($senha);
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
