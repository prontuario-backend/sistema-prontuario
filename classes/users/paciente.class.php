<?php 
include './database/conecao.class.php';
include './auxiliar/cpf.class.php';

  class Paciente {
    public string $nome;
    public string $cpf;
    public string $telefone;
    public string $cep;
    public string $endereco;
    public string $genero;
    public string $dtNascimento;
    public string $pai;
    public string $mae;
    public string $raca;
    public string $email;
    public string $altura;
    public string $peso;

    // Utilizando a padronização 'strtoupper' para deixar tudo em maiúsculo
    public function __constructor($nome, $cpf, $telefone, $cep, $endereco, $genero, $dtNascimento, $pai, $mae, $raca, $email, $altura, $peso){
      $this->nome = strtoupper($nome);
      $this->cpf = strtoupper($cpf);
      $this->telefone = strtoupper($telefone);
      $this->cep = strtoupper($cep);
      $this->endereco = strtoupper($endereco);
      $this->genero = strtoupper($genero);
      $this->dtNascimento = strtoupper($dtNascimento);
      $this->pai = strtoupper($pai);
      $this->mae = strtoupper($mae);
      $this->raca = strtoupper($raca);
      $this->email = strtoupper($email);
      $this->altura = strtoupper($altura);
      $this->peso = strtoupper($peso);
    }
  }

?> 
