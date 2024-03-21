<?php
include __DIR__ . '/includeClasses.php';
class Medico
{
    private string $nome;
    private string $crm;
    private string $senha;

    public function medico(string $nome, string $crm, string $senha)
    {
        $crm = new Crm($crm);
        $validar = new Validacao;

        $this->nome = $validar->valStr($nome);
        $this->crm = $crm->getCrm();
        $this->senha = $validar->valStr($senha);

        unset($validar);
        unset($crm);
    }
    // Métodos getters e setters

    // Métodos getters e setters

    public function getNome()
    {
        return $this->nome;
    }

    private function setNomeComp(string $nome)
    {
        $this->nome = $nome;
    }

    public function getcrm()
    {
        return $this->crm;
    }

    private function setcrm(string $crm)
    {
        $this->crm = $crm;
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