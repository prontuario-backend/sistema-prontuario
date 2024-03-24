<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'validacao.class.php';
class Cep//ok
{
    private string $cep;
    public function __construct(string $cep)
    {
        $validar = new Validacao();
        if ($this->validarCEP($cep)) {
            $this->cep = $cep;
        } else {
            throw new Exception("O CEP é inválido.");
        }
    }

    public function getCep()
    {
        return $this->cep;
    }
    public function validarCEP($cep)
    {
        // Remover caracteres não numéricos
        $cep = preg_replace('/[^0-9]/', '', $cep);

        // Verificar se o CEP tem o formato correto (XXXXX-XXX)
        if ($cep) {
            // Consultar a API dos Correios para validar o CEP
            $url = "https://viacep.com.br/ws/{$cep}/json/";
            $resultado = json_decode(file_get_contents($url), true);
            if (isset ($resultado['cep'])) {
                return true;
            }
        }
        return false;
    }

}
// $cep = new Cep('01001-000');
// echo $cep->getCep();