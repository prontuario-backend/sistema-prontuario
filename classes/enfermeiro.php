<?php

class enfermeiro
{
    private $id;
    private $nome;
    private $coren;
    private $senha;

    public function enfermeiro($nome, $coren, $senha)
    {
        $this->nome = $nome;
        $this->coren = $coren;
        $this->senha = $senha;
    }
    
    // Métodos getters e setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNomeComp($nome)
    {
        $this->nome = $nome;
    }

    public function getCoren()
    {
        return $this->coren;
    }

    public function setCoren($coren)
    {
        $this->coren = $coren;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function fazerCadastro($nome, $coren, $senha)
    {
        // Lógica para fazer o cadastro
    }

    public function fazerLogin($nome, $coren, $senha)
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
       // return new Paciente(); // Retorna um objeto Paciente
   //     return new Paciente(); // Retorna um objeto Paciente
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
