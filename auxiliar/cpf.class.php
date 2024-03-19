<?php
/*
 Esta classe recebe valida e formata um cpf independente se for string ou inteiro, outros tipos de dados não são suportados;
Para obter o cpf formatado ultilize o metodo getCpf();
exemplo cpf formatado: 000.000.000-00
*/
class Cpf{
    private readonly string $cpf;//apos criado o cpf nao pode ser reatribuido.

public function __construct(mixed $cpf){

    $cpf = $this->validaCpf($cpf);
//    $cpf = $this->formataCpf($cpf);
    $this->cpf = $cpf;    
}


private function validaCpf($cpf){
    if(strlen($cpf)== 11){//verifica se o cpf tem 11 caracteres

        if(Is_numeric($cpf) ==true){//verifica se tem somente numeros no cpf

                $cpf = strval($cpf);//converte o cpf para string
                return $cpf;

        }else{
            throw new Exception('Erro, o cpf não pode possuir letras, simbolos ou espaços vazios.');
        }
        
    }else{
        throw new Exception('Erro, o cpf fonecido não tem a quantidade de caracteres nessesario (11 char)');
    }
}

private function formataCpf($cpf){
    // adiciona a formatacao com '.' e '-' no cpf
    
    $cpf = substr_replace($cpf, '.', 3, 0);
    $cpf = substr_replace($cpf, '.', 7, 0);
    $cpf = substr_replace($cpf, '-', 11, 0);
    return $cpf;
}

public function getCpf(){
    if($this->cpf != null){
        return $this->cpf;
    }else{
        throw new Exception('Erro, não foi possivel retornar atributo cpf pois um cpf ainda não foi criado');
    }
}

}
