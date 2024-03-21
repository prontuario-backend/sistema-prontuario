<?php
include __DIR__ . '/includeClasses.php';

class Paciente//ok
{
    private string $nome;
    private string $dataNasc;
    private string $sexo;
    private string $corRaca;
    private string $email;
    private float $altura;
    private float $peso;
    private string $nomeMae;
    private string $nomePai;
    private string $telefone;
    private string $cep;
    private string $endereco;
    private string $cpf;

    public function paciente(string $nome, string $dataNasc, string $sexo, string $corRaca, string $email, float $altura, float $peso, string $nomeMae, string $nomePai, string $telefone, string $cep, string $endereco, string $cpf)
    {
        $validar = new Validacao;
        $cpf = new Cpf($cpf);
        $email = new Email($email);
        $cep = new Cep($cep);

        $this->nome = $validar->valStr($nome);
        $this->dataNasc = $validar->valStr($dataNasc);
        $this->sexo = $validar->valStr($sexo);
        $this->corRaca = $validar->valStr($corRaca);
        $this->email = $email->getEmail();
        $this->altura = $validar->valFloat($altura);
        $this->peso = $validar->valFloat($peso);
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->telefone = $validar->valStr($telefone);
        $this->cep = $cep->getCep();
        $this->endereco = $validar->valStr($endereco);
        $this->cpf = $cpf->getCpf();

        unset($validar);
        unset($cpf);
        unset($email);
        unset($cep);

    }


    private function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function setDataNasc(string $dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    private function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    private function setCorRaca(string $corRaca)
    {
        $this->corRaca = $corRaca;
    }

    public function getCorRaca()
    {
        return $this->corRaca;
    }

    private function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function setAltura(float $altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    private function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    private function setNomeMae(string $nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    private function setNomePai(string $nomePai)
    {
        $this->nomePai = $nomePai;
    }

    public function getNomePai()
    {
        return $this->nomePai;
    }

    private function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    private function setCep(string $cep)
    {
        $this->cep = $cep;
    }

    public function getCep()
    {
        return $this->cep;
    }

    private function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    private function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}
