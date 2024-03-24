<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeClasses.php';
class Medico//ok
{
    private string $nome;
    private string $crm;
    private string $senha;

    public function __construct(string $nome, string $crm, string $senha)
    {
        $crm = new Crm($crm);
        $validar = new Validacao;

        $this->nome = $validar->valStr2($nome);
        $this->crm = $crm->getCrm();
        $this->senha = $validar->valStr2($senha);

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

    public function getCrm()
    {
        return $this->crm;
    }

    private function setCrm(string $crm)
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
// $med = new Medico('eduardo', '00000MG', '123456');
// echo $med->getCrm();