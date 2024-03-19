<?php

require 'medico.php';
require 'familiares.php';

class Paciente
{
    private $id;
    private $nome;
    private $nomeSocial;
    private $sexo;
    private $dataNasc;
    private $tipoConvenio;
    private $dataEntrada;
    private $cpf;
    private $telefone;
    private $email;
    private $cep;
    private $numCasa;
    private $bairro;
    private $cidade;
    private $estado;
    private $escolaridade;
    private $corRaca;
    private $estadoCivil;
    private $profissao;
    private $naturalidade;
    private $nacionalidade;
    private $falecido;
    private $observacao;
    private $responsavelPaciente;
    private $dadosFamiliares;

        // Construtor
        public function paciente(
            $nome,
            $nomeSocial,
            $sexo,
            $dataNasc,
            $tipoConvenio,
            $dataEntrada,
            $cpf,
            $telefone,
            $email,
            $cep,
            $numCasa,
            $bairro,
            $cidade,
            $estado,
            $escolaridade,
            $corRaca,
            $profissao,
            $naturalidade,
            $nacionalidade,
            $falecido,
            $observacao,
            $responsavelPaciente,
            $dadosFamiliares
        ) {
            $this->nome = $nome;
            $this->nomeSocial = $nomeSocial;
            $this->sexo = $sexo;
            $this->dataNasc = $dataNasc;
            $this->tipoConvenio = $tipoConvenio;
            $this->dataEntrada = $dataEntrada;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->cep = $cep;
            $this->numCasa = $numCasa;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->escolaridade = $escolaridade;
            $this->corRaca = $corRaca;
            $this->profissao = $profissao;
            $this->naturalidade = $naturalidade;
            $this->nacionalidade = $nacionalidade;
            $this->falecido = $falecido;
            $this->observacao = $observacao;
            $this->responsavelPaciente = $responsavelPaciente;
            $this->dadosFamiliares = $dadosFamiliares;
        }

        public function getId()
        {
            return $this->id;
        }
        
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getNomeSocial()
        {
            return $this->nomeSocial;
        }
        
        public function getSexo()
        {
            return $this->sexo;
        }
        
        public function getDataNasc()
        {
            return $this->dataNasc;
        }
        
        public function getTipoConvenio()
        {
            return $this->tipoConvenio;
        }
        
        public function getDataEntrada()
        {
            return $this->dataEntrada;
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
        
        public function getNumCasa()
        {
            return $this->numCasa;
        }
        
        public function getBairro()
        {
            return $this->bairro;
        }
        
        public function getCidade()
        {
            return $this->cidade;
        }
        
        public function getEstado()
        {
            return $this->estado;
        }
        
        public function getEscolaridade()
        {
            return $this->escolaridade;
        }
        
        public function getCorRaca()
        {
            return $this->corRaca;
        }
        
        public function getEstadoCivil()
        {
            return $this->estadoCivil;
        }
        
        public function getProfissao()
        {
            return $this->profissao;
        }
        
        public function getNaturalidade()
        {
            return $this->naturalidade;
        }
        
        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }
        
        public function getFalecido()
        {
            return $this->falecido;
        }
        
        public function getObservacao()
        {
            return $this->observacao;
        }
        
        public function getResponsavelPaciente()
        {
            return $this->responsavelPaciente;
        }
        
        public function getDadosFamiliares()
        {
            return $this->dadosFamiliares;
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

    public function colicitarConsulta(): void {
        // Lógica para solicitar uma consulta
    }

    public function cealizarExames(): void {
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
