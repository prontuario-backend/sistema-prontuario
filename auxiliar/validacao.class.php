<?php
/*
esta classe é responsavel por filtar dados vindos do front end e retornar dados validos,
ela deve ter metodos para filtrar dados no geral e tambem pode possuir metodos especiais dependendo da nessesidade
de outras classes.
*/

class Validacao
{

    public function valStr(string $str)
    {
        if (filter_var($str, FILTER_UNSAFE_RAW)) {
            if (filter_var($str, HTML_SPECIALCHARS)) {
                return $str;
            }
        } else {
            throw new Exception("Erro, o valor: $str não e do tipo string");
        }
    }
    public function valInt(int $int)
    {
        if (filter_var($int, FILTER_SANITIZE_NUMBER_INT)) {
            return $int;
        } else {
            throw new Exception("Erro, o valor: $int não e do tipo int");
        }
    }
    public function valFloat(float $float)
    {
        if (filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT)) {
            return $float;
        } else {
            throw new Exception("Erro, o valor: $float não e do tipo float");
        }
    }

}