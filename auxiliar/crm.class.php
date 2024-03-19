<?php
/*
 Esta classe recebe e valida  um crm ela acita somente o tipo string, outros tipos de dados não são suportados;
Para obter o crm formatado ultilize o metodo getCrm();
exemplo crm formatado: 00000-MG
*/
class Crm{ 
    private readonly string $crm;//apos criado o crm nao pode ser reatribuido.
    public function __construct(string $crm){

        $this ->validaCrm($crm);
        $crm = strtoupper($crm);
//        $crm = $this->formataCrm($crm);
        $this->crm = $crm;
    }

    private function validaCrm(string $crm){
        for($i=0; $i < 4; $i++){//verifica se os 5 primeiro caracteres do crm são numeros
            if(is_numeric($crm[$i]) == false){
             throw new Exception('Erro, não pode ter letras, simbolos ou espaços vazios nos primeiros 5 caracteres do crm.');   
            }
        }
        
        $estado = $crm[5] . $crm[6];// pega os 2 ultimos caracteres do crm e concatena para criar o estado.
        $this->validarEstado($estado);

        
    }


    public function validarEstado(string $estado){
        if(strlen($estado) > 2 || strlen($estado) < 2){//verifica a quantidade de caracteres do parametro passado.
            throw new Exception('Erro, a sigla do estado fornecido deve ter exatamente 2 caracteres. '); 
        }
        if(ctype_alpha($estado) == false){//verifica se tem números no parametro passado
            throw new Exception('Erro, o parametro estado não pode ser do tipo int.');
        }
        $estado = str_replace(' ', '', $estado);//remove os espaços em branco do parametro
        $estado = trim(strtoupper($estado));//remove os espaços em branco do parametro e o deixa maiusculo.

        //lista dos 26 estados brasileiros
        $listaEstados = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'ES', 'GO', 'MA', 'MT','MS', 'MG',
        'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO', 'DF'];


        foreach($listaEstados as $i => $valor){
          if($estado === $valor){//verifica se o estado fornecido esta na lista de estados
            return $estado;
          }else if($i == count($listaEstados) -1 && $estado != $valor){
            throw new Exception('Erro, o estado fornecido não existe ou é invalido,');
          }
        }
    }
    private function formataCrm(string $crm){
        $crm = substr_replace($crm, '-', 5, 0);
        return $crm;
    }

    public function getCrm(){
        if($this->crm != null){//verifica se o crm ja foi criado se sim o retorna
            return $this->crm;
        }else{
            throw new Exception('Erro, não foi possivel retornar o atributo crm pois um crm ainda não foi criado.');
        }

    }
}
