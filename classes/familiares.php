<?php

class familiares
{
    private $nomePai;
    private $nomeMae;
    private $quantFilhos;
    private $nomeConjuge;
    private $titularCPF;
    private $cpf;
    private $dataNascConjuge;
    private $condGenetica;

     // Método construtor da classe Familiares
     public function __construct($nomePai, $nomeMae, $quantFilhos, $nomeConjuge, $titularCPF, $cpf, $dataNascConjuge, $condGenetica) {
        $this->nomePai = $nomePai;
        $this->nomeMae = $nomeMae;
        $this->quantFilhos = $quantFilhos;
        $this->nomeConjuge = $nomeConjuge;
        $this->titularCPF = $titularCPF;
        $this->cpf = $cpf;
        $this->dataNascConjuge = $dataNascConjuge;
        $this->condGenetica = $condGenetica;
    }

    //  'nomePai'
    public function getNomePai()
    {
        return $this->nomePai;
    }

    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    // 'nomeMae'
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    // 'quantFilhos'
    public function getQuantFilhos()
    {
        return $this->quantFilhos;
    }

    public function setQuantFilhos($quantFilhos)
    {
        $this->quantFilhos = $quantFilhos;
    }

    // 'nomeConjuge'
    public function getNomeConjuge()
    {
        return $this->nomeConjuge;
    }

    public function setNomeConjuge($nomeConjuge)
    {
        $this->nomeConjuge = $nomeConjuge;
    }

    //  'titularCPF'
    public function getTitularCPF()
    {
        return $this->titularCPF;
    }

    public function setTitularCPF($titularCPF)
    {
        $this->titularCPF = $titularCPF;
    }

    // 'cpf'
    public function getCPF()
    {
        return $this->cpf;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    // 'dataNascConjuge'
    public function getDataNascConjuge()
    {
        return $this->dataNascConjuge;
    }

    public function setDataNascConjuge($dataNascConjuge)
    {
        $this->dataNascConjuge = $dataNascConjuge;
    }

    //  'condGenetica'
    public function getCondGenetica()
    {
        return $this->condGenetica;
    }

    public function setCondGenetica($condGenetica)
    {
        $this->condGenetica = $condGenetica;
    }
}

