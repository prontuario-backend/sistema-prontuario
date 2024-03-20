<?php

class admin {
    // Atributos
    private $nome;
    private $email;
    private $telefone;
    private $cargoSetor;
    private $endereco;
    private $salario;

    // Construtor
    public function __construct( $nome, $email, $telefone, $cargoSetor, $endereco, $salario) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cargoSetor = $cargoSetor;
        $this->endereco = $endereco;
        $this->salario = $salario;
    }

    // Métodos
    // nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    // email
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    // telefone
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    // cargo/setor
    public function setCargoSetor($cargoSetor) {
        $this->cargoSetor = $cargoSetor;
    }

    public function getCargoSetor() {
        return $this->cargoSetor;
    }

    // endereço
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // salário
    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    //outros metodos

    public function GerenciarFuncionario() {
        // Lógica para gerenciar funcionário
    }

    public function ConsultarUsuario() {
        // Lógica para consultar usuário
        return null;
    }

    public function Excluir() {
        // Lógica para excluir
    }

    public function CadastrarPaciente() {
        // Lógica para cadastrar paciente
    }

    public function Atualizar() {
        // Lógica para atualizar
    }
}