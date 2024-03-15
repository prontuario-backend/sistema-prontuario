<?php

class medico
{
    private $id;
    private $nome;
    private $email;
    private $corem;
    private $setor;
    private $cargoSetor;
    private $telefone;
    private $endereco;
    private $salario;


    public function __construct($id, $nome, $email, $corem, $setor, $cargoSetor, $telefone, $endereco, $salario) {
        $this->id = $id;
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

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

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
        echo "ID: {$this->getId()}\n";
        echo "Nome: {$this->getNome()}\n";
        echo "Email: {$this->getEmail()}\n";
        echo "Corem: {$this->getCorem()}\n";
        echo "Setor: {$this->getSetor()}\n";
        echo "Cargo no Setor: {$this->getCargoSetor()}\n";
        echo "Telefone: {$this->getTelefone()}\n";
        echo "Endereço: {$this->getEndereco()}\n";
        echo "Salário: {$this->getSalario()}\n";
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


