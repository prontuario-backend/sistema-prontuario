<?php

class medico
{
    private $nome;
    private $email;
    private $corem;
    private $setor;
    private $cargoSetor;
    private $telefone;
    private $endereco;
    private $salario;


    public function __construct($nome, $email, $corem, $setor, $cargoSetor, $telefone, $endereco, $salario) {
        $this->nome = $nome;
        $this->email = $email;
        $this->corem = $corem;
        $this->setor = $setor;
        $this->cargoSetor = $cargoSetor;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->salario = $salario;
    }

    // Métodos setters e getters para cada atributo




    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setCorem($corem)
    {
        $this->corem = $corem;
    }

    public function getCorem()
    {
        return $this->corem;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setCargoSetor($cargoSetor)
    {
        $this->cargoSetor = $cargoSetor;
    }

    public function getCargoSetor()
    {
        return $this->cargoSetor;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    // Método para exibir todos os dados do médico
    public function exibirDados()
    {
        // echo ">>>ID
        // Nome: ".{$this->getNome()}."\n
        // Email: {$this->getEmail()}\n
        // Corem: {$this->getCorem()}\n
        // Setor: {$this->getSetor()}\n
        // Cargo no Setor: {$this->getCargoSetor()}\n
        // Telefone: {$this->getTelefone()}\n
        // Endereço: {$this->getEndereco()}\n
        // Salário: {$this->getSalario()}\n
        // ID";
    }
    public function RealizarConsultas()
    {
        // Lógica para realizar consultas
    }

    public function RealizarExame()
    {
        // Lógica para realizar exames
    }

    public function EmitirReceitas()
    {
        // Lógica para emitir receitas
    }

    public function AtualizarProntuario()
    {
        // Lógica para atualizar prontuário
    }

    public function AgendarExame()
    {
        // Lógica para agendar exames
    }
}


