<?php

class enfermeiro
{
    private $id;
    private $nomeComp;
    private $coren;
    private $senha;

    public function enfermeiro($nomeComp, $coren, $senha)
    {
        $this->nomeComp = $nomeComp;
        $this->coren = $coren;
        $this->senha = $senha;
    }
    
    // Métodos getters e setters

    public function getId()
    {
        return $this->id;
    }

   private function setId($id)
    {
        $this->id = $id;
    }

    public function getNomeComp()
    {
        return $this->nomeComp;
    }

   private function setNomeComp($nomeComp)
    {
        $this->nomeComp = $nomeComp;
    }

    public function getCoren()
    {
        return $this->coren;
    }

   private function setCoren($coren)
    {
        $this->coren = $coren;
    }

    public function getSenha()
    {
        return $this->senha;
    }

   private function setSenha($senha)
    {
        $this->senha = $senha;
    }


}
