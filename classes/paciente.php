<?php

class Paciente
{
    private $id;
    private $nome;
    private $dataNasc;
    private $sexo;
    private $corRaca;
    private $email;
    private $altura;
    private $peso;
    private $nomeMae;
    private $nomePai;
    private $telefone;
    private $cep;
    private $endereco;
    private $cpf;

    public function paciente($nome, $dataNasc, $sexo, $corRaca, $email, $altura, $peso, $nomeMae, $nomePai, $telefone, $cep, $endereco, $cpf)
    {
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->sexo = $sexo;
        $this->corRaca = $corRaca;
        $this->email = $email;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
    }

    private function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    private function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    private function setCorRaca($corRaca)
    {
        $this->corRaca = $corRaca;
    }

    public function getCorRaca()
    {
        return $this->corRaca;
    }

    private function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    private function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    private function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    private function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    public function getNomePai()
    {
        return $this->nomePai;
    }

    private function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    private function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getCep()
    {
        return $this->cep;
    }

    private function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    private function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function criarPaciente($nome, $dataNasc, $sexo, $corRaca, $email, $altura, $peso, $nomeMae, $nomePai, $telefone, $cep, $endereco, $cpf)
    {
        // Lógica para criar paciente
    }
}
