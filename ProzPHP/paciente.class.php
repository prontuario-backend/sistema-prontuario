<?php

require 'medico.php';
require 'familiares.php';

class Paciente
{
    private $nome;
    private $genero;
    private $dataNasc;
    private $cpf;
    private $telefone;
    private $email;
    private $cep;
    private $endereco;
    private $corRaca;
    private $mae;
    private $pai;
    private $altura;
    private $peso;

        // Construtor
        public function __construct      
        (
            $nome,
            $genero,
            $dataNasc,
            $cpf,
            $telefone,
            $email,
            $cep,
            $endereco,
            $corRaca,
            $mae,
            $pai,
            $altura,
            $peso,
        ) {
            $this->nome = $nome;
            $this->genero = $genero;
            $this->dataNasc = $dataNasc;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->cep = $cep;
            $this->endereco = $endereco;
            $this->corRaca = $corRaca;
            $this->mae = $mae;
            $this->pai = $pai;
            $this->altura = $altura;
            $this->peso = $peso;
        }


        
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getGenero()
        {
            return $this->genero;
        }
        
        public function getDataNasc()
        {
            return $this->dataNasc;
        }
        
        public function getCpf()
        {
            return $this->cpf;
        }
        
        public function getTelefone()
        {
            return $this->telefone;
        }
        
        public function getEmail()
        {
            return $this->email;
        }
        
        public function getCep()
        {
            return $this->cep;
        }
        
        public function getEndereco()
        {
            return $this->endereco;
        }
        
        public function getCorRaca()
        {
            return $this->corRaca;
        }
        
        public function getMae()
        {
            return $this->mae;
        }

        public function getPai()
        {
            return $this->pai;
        }

        public function getAltura()
        {
            return $this->altura;
        }
        
        public function getPeso()
        {
            return $this->peso;
        }
        
    // ... (outros métodos)

       
    public function SolicitarCadastro(): void {
        // Lógica para solicitar o cadastro
    }

   
    public function getConsulta($consulta) {
        // Lógica para obter a consulta
        return null;
    }

    public function getMedico():/*medico*/ null {
        // Lógica para obter o médico associado ao paciente
        return null; 
    }

    public function solicitarConsulta(): void {
        // Lógica para solicitar uma consulta
    }

    public function realizarExames(): void {
        // Lógica para realizar os exames
    }

    public function setDataNascimento($dataNasc): void {
        // Lógica para definir a data de nascimento
    }

    public function calcularIdade(): int {
        // Lógica para calcular a idade
        return 0; // ou retornar a idade calculada
    }

    public function AddConsulta($consulta) {
        // Lógica para adicionar uma consulta ao paciente
    }
}
