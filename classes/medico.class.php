<?php

require 'paciente.php';

class medico
{
    private $id;
    private $nomeComp;
    private $crm;
    private $senha;

    public function medico($nomeComp, $crm, $senha)
    {
        $this->nomeComp = $nomeComp;
        $this->crm = $crm;
        $this->senha = $senha;
    }
    // Métodos getters e setters

    private function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private function setNomeComp($nomeComp)
    {
        $this->nomeComp = $nomeComp;
    }

    public function getNomeComp()
    {
        return $this->nomeComp;
    }

    private function setCrm($crm)
    {
        $this->crm = $crm;
    }

    public function getCrm()
    {
        return $this->crm;
    }

    private function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function fazerCadastro($nome, $crm, $senha)
    {
        // Lógica para fazer o cadastro
    }

    public function fazerLogin($nome, $crm, $senha)
    {
        // Lógica para fazer login
    }

    public function alterarSenha($novaSenha, $senhaAntiga)
    {
        // Lógica para alterar senha
    }

    public function alterarNome($novoNome)
    {
        // Lógica para alterar nome
    }

    public function deslogar()
    {
        // Lógica para deslogar
    }

    public function excluirConta()
    {
        // Lógica para excluir conta
    }

    public function pesquisarPaciente($nomePacienteOuCpfPaciente)
    {
        // Lógica para pesquisar paciente
        /* return new Paciente(); */          // Retorna um objeto Paciente
    }

    public function criarAnotacaoEnfermagem($anotacaoEnf)
    {
        // Lógica para criar anotação de enfermagem
    }

    public function criarAnamnese($anamnese)
    {
        // Lógica para criar anamnese
    }

    public function criarBalancoHidrico($balancoHidrico)
    {
        // Lógica para criar balanço hídrico
    }
}
