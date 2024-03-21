<?php
//include_once __DIR__ . '/includeAux.php';
/*
 Esta classe recebe  valida  e formata um coren ela aceita somente o tipo string, outros tipos de dados não são suportados;
Para obter o coren formatado ultilize o metodo getCoren();
os metodos de validação foram criados presumindo o recebimento de um não coren formatado.

exemplo coren nao formatado: CORENMG00000ENF
exemplo coren formatado: COREN-MG-00000-ENF
*/

class Coren//ok
{
    private readonly string $coren;//apos criado o coren nao pode ser reatribuido.
    public function __construct(string $coren)
    {
        $validar = new Validacao();
        $coren = $this->validarCoren($coren);
        //$coren = $this->formataCoren($coren);
        $this->coren = $coren;
    }

    private function validarCoren(string $coren)
    {
        $coren = str_replace(' ', '', $coren);//remove os espaços em branco do parametro
        $coren = trim(strtoupper($coren));//remove os espaços em branco do parametro e o deixa maiusculo

        if (str_starts_with($coren, 'COREN') == false) {//verifica se o parametro começa com o prefixo 'COREN'
            throw new Exception('Erro, o coren recebido não possui o prefixo "COREN" no inicio ou possui algum número no seu inicio.');
        }


        $estado = $coren[5] . $coren[6];// pega os caracteres num 5 e 6 do coren e concatena para criar um estado.
        $this->validarEstado($estado);

        for ($i = 7; $i < 11; $i++) {//verifica se os caracteres de 7 a 11 do coren são numeros
            if (is_numeric($coren[$i]) == false) {
                throw new Exception('Erro, não pode ter letras, simbolos ou espaços vazios nos caracteres de 8 a 12 do coren.');
            }
        }
        $categoria = substr($coren, 12);//pega a categoria do coren e atribui a uma variavel
        $this->validarCategoria($categoria);

        unset($estado);//limpeza de variaveis nao mais ultilizadas
        unset($categoria);

        return $coren;
    }

    public function validarEstado(string $estado)
    {
        if (strlen($estado) > 2 || strlen($estado) < 2) {//verifica a quantidade de caracteres do parametro passado.
            throw new Exception('Erro, a sigla do estado fornecido deve ter exatamente 2 caracteres. ');
        }
        if (ctype_alpha($estado) == false) {//verifica se tem números no parametro passado
            throw new Exception('Erro, o parametro estado não pode ser do tipo int.');
        }
        $estado = str_replace(' ', '', $estado);//remove os espaços em branco do parametro
        $estado = trim(strtoupper($estado));//remove os espaços em branco do parametro e o deixa maiusculo.

        //lista dos 26 estados brasileiros
        $listaEstados = [
            'AC',
            'AL',
            'AP',
            'AM',
            'BA',
            'CE',
            'ES',
            'GO',
            'MA',
            'MT',
            'MS',
            'MG',
            'PA',
            'PB',
            'PR',
            'PE',
            'PI',
            'RJ',
            'RN',
            'RS',
            'RO',
            'RR',
            'SC',
            'SP',
            'SE',
            'TO',
            'DF'
        ];


        foreach ($listaEstados as $i => $valor) {

            if ($estado === $valor) {//verifica se o estado fornecido esta na lista de estados
                return $estado;
            } else if ($i == count($listaEstados) - 1 && $estado != $valor) {
                throw new Exception('Erro, o estado fornecido não existe ou é invalido,');
            }
        }
    }

    private function validarCategoria(string $categoria)
    {
        $categoria = str_replace(' ', '', $categoria);//remove os espaços em branco do parametro
        $categoria = trim(strtoupper($categoria));//remove os espaços em branco do parametro e o deixa maiusculo

        if (ctype_alpha($categoria) == false) {//verifica se tem números no parametro passado
            throw new Exception('Erro, o parametro categoria não pode ser do tipo int.');
        }
        $listaCategorias = ['ENF', 'TE', 'AE', 'OBST'];

        foreach ($listaCategorias as $i => $valor) {
            if ($categoria === $valor) {//verifica se a categoria fornecida esta na lista de categorias
                return $categoria;
            } else if ($i == count($listaCategorias) - 1 && $categoria != $valor) {
                throw new Exception('Erro, a categoria fornecida não existe ou é invalida,');
            }
        }
    }

    private function formataCoren($coren)
    {//formata o coren
        $coren = str_replace(' ', '', $coren);//remove os espaços em branco do parametro
        $coren = trim(strtoupper($coren));//remove os espaços em branco do parametro e o deixa maiusculo

        $coren = substr_replace($coren, '-', 5, 0);
        $coren = substr_replace($coren, '-', 8, 0);
        $coren = substr_replace($coren, '-', 14, 0);
        return $coren;
    }

    public function getCoren()
    {
        if ($this->coren != null) {//verifica se o coren ja foi criado se sim o retorna
            return $this->coren;
        } else {
            throw new Exception('Erro, não foi possivel retornar o atributo coren pois um coren ainda não foi criado.');
        }
    }
}
// $coren = new Coren('CORENMG00000ENF');
// echo $coren->getCoren();