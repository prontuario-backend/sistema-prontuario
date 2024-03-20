<?php

class paciente {
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

    public function paciente($nome, $dataNasc, $sexo, $corRaca, $email, $altura, $peso, $nomeMae, $nomePai, $telefone, $cep, $endereco, $cpf) {
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

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setCorRaca($corRaca) {
        $this->corRaca = $corRaca;
    }

    public function getCorRaca() {
        return $this->corRaca;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setNomeMae($nomeMae) {
        $this->nomeMae = $nomeMae;
    }

    public function getNomeMae() {
        return $this->nomeMae;
    }

    public function setNomePai($nomePai) {
        $this->nomePai = $nomePai;
    }

    public function getNomePai() {
        return $this->nomePai;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function criarPaciente($nome, $dataNasc, $sexo, $corRaca, $email, $altura, $peso, $nomeMae, $nomePai, $telefone, $cep, $endereco, $cpf) {
        // Lógica para criar paciente
    }
}

?>
