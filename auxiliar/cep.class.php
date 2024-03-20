<?php
function validarCEP($cep) {
    // Remover caracteres não numéricos
    $cep = preg_replace('/[^0-9]/', '', $cep);

    // Verificar se o CEP tem o formato correto (XXXXX-XXX)
    if (preg_match('/^\d{5}-\d{3}$/', $cep)) {
        // Consultar a API dos Correios para validar o CEP
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $resultado = json_decode(file_get_contents($url), true);
        if (isset($resultado['cep'])) {
            return true;
        }
    }
    return false;
}

$cep = "12345-678";
if (validarCEP($cep)) {
    echo "O CEP é válido.";
} else {
    echo "O CEP é inválido.";
}

