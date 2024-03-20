'use strict'

function teste(){

    //dados para teste
    let dados = {
        nome: "eduardo",
        senha: "1234567890",
        crmOuCoren: "corenmg12345enf",
    };

    let a = doRequest(
        "http://localhost/php-poo/Nova%20pasta/sistema-prontuario/integracao/integracao.php",
        validarMetodoEnvio("post"),
        appendFormData(dados)
    );
}
teste();